<?php

use Illuminate\Http\Request;
use App\StockManagement;
use App\BigCategory;
use App\MiddleCategory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Record;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * 選択された月の出荷リストをだす
 * @param int item_id
 * @param date selected_date
 * @return response result
 */
Route::get('stock/{id}/{date}', function(Request $request, $id, $date) {
  $startDate = new DateTime($date);
  $lastDate = new DateTime($date);
  $lastDate->modify('+1 month');
  $stocks = StockManagement::withTrashed()
                              ->where([['stock_status', 1],['item_id', $id]])
                              ->whereBetween('created_at',[$startDate, $lastDate])
                              ->get();
  return $stocks;
});

// ナビゲーションのカテゴリーリストを出す。
Route::get('navi', function(Request $request) {
    $bigcategories = BigCategory::all();
    return $bigcategories->toJson();
});


/**
 * 選択された在庫の商品情報を出す。
 * @param Int id Bigcagory id
 * @return List middleCategories
 */
Route::get('stock/{id}', function(Request $request, $id) {
  if ($id !== null) {
    $selectedBigcategoryItems = MiddleCategory::where('big_category_id',$id)->get();
    $bigcategoryList = [];
    foreach ($selectedBigcategoryItems as $bigCategoryItemKey => $bigCategoryItem) {
      $items = $bigCategoryItem->items;
      foreach($items as $item_key => $item) {
        $item->stocks;
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
});

/**
 * 入力した在庫登録
 * 出荷する時必ず古い製造を出します。
 * @param Request $request 
 * @return response result
 */
Route::post('stock', function(Request $request) {
  if ($request->ajax() && $request->post()) {
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
    // 入力項目にエラーがない場合Recordを生成
    $record = Record::create();
    $recordId = $record->id;
    foreach($stockDataList as $stockData) {
      $stockData += ['record_id' => $recordId];
      $stockCount = $stockData['stock_count'];
      if ($stockData['stock_status'] === 1) {
        // 出荷の場合 在庫からマイナス(一番古い在庫を削除)
        while ($stockCount > 0) {
          $oldImportStock = StockManagement::where('item_id', $stockData['item_id'])
                                                  ->where('stock_status', 2)
                                                  ->where('currentstock_count','!=', 0)->orderBy('created_at')->first();
          
          if ($oldImportStock !== null) {
            if ($stockCount - $oldImportStock->currentstock_count > 0) {
              // 出荷数　-　一番古い在庫で出荷数が残る場合古い在庫分出荷数で記録
              $stockData['stock_count'] = $oldImportStock->currentstock_count;
              $stockData += ['shipment_id' => $oldImportStock->record_id];
              $stockData = StockManagement::create($stockData);
              $stockData->delete();
              
              $stockCount -= $oldImportStock->currentstock_count;

              // 古い在庫は削除する
              $oldImportStock->currentstock_count = 0;
              $oldImportStock->save();
              $oldImportStock->delete();
            } else {
              // 出荷数　-　一番古い在庫で出荷数が残らない場合出荷数を記録
              $stockData['stock_count'] = $stockCount;
              $stockData += ['shipment_id' => $oldImportStock->record_id];
              $stockData = StockManagement::create($stockData);
              $stockData->delete();

              $oldImportStock->currentstock_count -= $stockCount;
              $oldImportStock->save();
              ($oldImportStock->currentstock_count === 0) && $oldImportStock->delete();
              break;
            }
          } else {
            // 次の在庫がない場合残り出荷を入力
            $stockData['stock_count'] = $stockCount;
            StockManagement::create($stockData);
            break;
          }
        }

      } else if ($stockData['stock_status'] === 2) {
        // 在庫に入力
        while ($stockCount > 0) {
          $notShppingStock = StockManagement::where('item_id', $stockData['item_id'])
                                              ->where('stock_status', 1)
                                              ->whereNull('shipment_id')->orderBy('created_at')->first(); 
          if ($notShppingStock === null) {
            // 在庫なしの出庫がない
            $stockData += ['currentstock_count' => $stockCount];
            StockManagement::create($stockData);
            break;
          } else {
            // 在庫なしで出庫の場合がある
            if ($stockCount - $notShppingStock->currentstock_count > 0) {
              // 新製造の数が残り出荷より多い場合
              $notShppingStock->shipment_id= $stockData['record_id'];
              $notShppingStock->update();
              $notShppingStock->delete();
              $stockCount -= $notShppingStock->stock_count;
            } else {
              // 新製造の数が残り出荷より少ない場合
              // 新製造で
              $partStock = $notShppingStock->toArray();
              unset($partStock['id']);
              $partStock['stock_count'] = $notShppingStock->stock_count - $stockCount;
              StockManagement::create($partStock);

              // 新製造分出荷
              $notShppingStock->stock_count = $stockCount;
              $notShppingStock->shipment_id= $stockData['record_id'];
              $notShppingStock->update();
              $notShppingStock->delete();

              // 新製造の現在在庫の量を0にして保存
              $stockData += ['currentstock_count' => 0];
              $stockData = StockManagement::create($stockData);
              $stockData->delete();
              break;
            }
          }
        }
      }
    }

    return response()->json([
        'error' => false,
    ], 200);
  } else {
    return response()->json([
        'error'    => true,
    ], 419);
  }
});


/**
 * 保存記録をだす
 * @return response result
 */
Route::get('record', function(Request $request) {
  $recordList = Record::all();
  return $recordList->toJson();
});