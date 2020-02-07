<?php

namespace App\Http\Controllers;

use App\BigCategory;
use App\MiddleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\StockManagement;
use App\Http\Requests\InsertStockData;

class StockController extends Controller
{
    //

    public function index($date = null)
    {
        # code...

        $bigcategories = BigCategory::all();

        if (!$bigcategories) {
            abort(404);
        }
        return view('stock.index');
    }

    /**
     * show Navigation Item list
     */
    public function navi() {
      $bigcategories = BigCategory::all();
      return $bigcategories->toJson();
    }

    /**
     * 選択された在庫の商品情報を出す。
     * @param Int id Bigcagory id
     * @return List middleCategories
     */
    public function selectNavi($id = null) {
      if ($id !== null) {
        $selectedBigcategoryItems = MiddleCategory::where('big_category_id',$id)->get();
        $bigcategoryList = [];
        foreach ($selectedBigcategoryItems as $bigCategoryItemKey => $bigCategoryItem) {
          $items = $bigCategoryItem->items;
          foreach($items as $item_key => $item) {
            $item->stocks->toArray();
            $items[$item_key] = $item->toArray();
          }
          $bigcategoryList[$bigCategoryItemKey] = [
            'id' => $bigCategoryItem->id,
            'big_category_id' => $bigCategoryItem->big_category_id,
            'name' => $bigCategoryItem->name,
            'items' => $items
          ];
        }
        // dd($bigcategoryList);
        return response()->json($bigcategoryList);
      } else {
        // Todo Error Handling
        return response('database is wrong',501);
      }
    }

    public function insertStockList(Request $request) {
      $stockDataList = $request->all();
      foreach($stockDataList as $stockData) {
        $validator = Validator::make($stockData, array(
            'item_id' => 'required',
            'stock_count' => 'required',
            'stock_status' => 'required',
            'middle_category_id' => 'required',
            'big_category_id' => 'required',
        ));
        if ($validator->fails()) {
          Log::info('insert error : '. $validator->errors());
          return response()->json([
              'error'    => true,
              'messages' => $validator->errors(),
          ], 422);
        }
      }
      foreach($stockDataList as $stockData) {
        StockManagement::create($stockData);
      }      

      return response()->json([
          'error' => false,
      ], 200);
    }

}
