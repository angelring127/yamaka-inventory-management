<?php

use Illuminate\Http\Request;
use App\StockManagement;
use App\BigCategory;
use App\Item;
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
                              ->where([['stock_status', 1],['item_id', $id],['stock_count','>', 0]])
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
    $bigcategory = BigCategory::find($id);
    $selectedBigcategoryItems = MiddleCategory::where('big_category_id',$id)->get();
    $middleCategoryList = [];
    foreach ($selectedBigcategoryItems as $bigCategoryItemKey => $bigCategoryItem) {
      $items = $bigCategoryItem->items;
      foreach($items as $item_key => $item) {
        $item->stocks;
      }
      $middleCategoryList[$bigCategoryItemKey] = [
        'id' => $bigCategoryItem->id,
        'lows' => $bigCategoryItem->lows,
        'big_category_id' => $bigCategoryItem->big_category_id,
        'name' => $bigCategoryItem->name,
        'items' => $items
      ];
    }
    return response()->json(['bigcategory' => $bigcategory ,'items' => $middleCategoryList]);
  } else {
    // Todo Error Handling
    return response('database is wrong',501);
  }
});

/**
 * 在庫項目リストで出す。
 */
Route::get('stock', function() {
  $bigcategories = BigCategory::all();
  foreach ($bigcategories as $bigcategory) {
    $bigcategory->middleCategories;
  }
  return $bigcategories->toJson();
});

/**
 * 項目追加
 */
Route::post('stock/item', function(Request $request){
  if ($request->ajax() && $request->post()) {
    $itemData = $request->all();
    $validator = Validator::make($itemData,array(
      'middle_category_id' => 'required',
      'big_category_id' => 'required',
      'name' => 'required'
    ));
    if ($validator->fails()) {
      Log::info('insert error : '. $validator->errors());
      return response()->json([
          'error'    => true,
          'messages' => $validator->errors(),
      ], 422);
    }
    $middleCategory = MiddleCategory::find($request->middle_category_id);
    $item = new Item();
    $item->big_category_id = $request->big_category_id;
    $item->middle_category_id = $request->middle_category_id;
    $item->index = $middleCategory->lows;
    $item->name = $request->name;
    $result = $item->save();

    $middleCategory->lows = $middleCategory->lows + 1;
    $middleCategory->save();

    return response()->json($result, 200);
  }
  return response()->json([
    'error'    => true,
], 419);
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
              $shippingStock = $stockData;
              $shippingStock['stock_count'] = $oldImportStock->currentstock_count;
              $shippingStock += ['shipment_id' => $oldImportStock->record_id];
              $shippingStock = StockManagement::create($shippingStock);
              $shippingStock->delete();
              
              $stockCount -= $oldImportStock->currentstock_count;

              // 古い在庫は削除する
              $oldImportStock->currentstock_count = 0;
              $oldImportStock->save();
              $oldImportStock->delete();
            } else {
              // 出荷数　-　一番古い在庫で出荷数が残らない場合出荷数を記録
              $shippingStock = $stockData;
              $shippingStock['stock_count'] = $stockCount;
              $shippingStock += ['shipment_id' => $oldImportStock->record_id];
              $shippingStock = StockManagement::create($shippingStock);
              $shippingStock->delete();

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
            if ($stockCount - $notShppingStock->stock_count > 0) {
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
 * 入力した在庫修正
 * 出荷する時必ず古い製造を出します。
 * @param Request $request 
 * @return response result
 */
Route::post('stock/edit', function(Request $request) {
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
      $stockData += ['is_edit' => 1];
      $stockCount = $stockData['stock_count'];
      if ($stockData['stock_status'] === 1) {
        // 出荷の場合 在庫からマイナス(一番古い在庫を削除)
        while ($stockCount > 0) {
          $newImportStock = StockManagement::where('item_id', $stockData['item_id'])
                                                  ->where('stock_status', 2)
                                                  ->where('currentstock_count','!=', 0)->orderBy('created_at', 'desc')->first();
          
          if ($newImportStock !== null) {
            if ($stockCount - $newImportStock->currentstock_count > 0) {
              // 出荷数　-　一番古い在庫で出荷数が残る場合古い在庫分出荷数で記録
              $shippingStock = $stockData;
              $shippingStock['stock_count'] = $newImportStock->currentstock_count;
              $shippingStock += ['shipment_id' => $newImportStock->record_id];
              $shippingStock += ['is_edit' => 1];
              $shippingStock = StockManagement::create($shippingStock);
              $shippingStock->delete();
              
              $stockCount -= $newImportStock->currentstock_count;

              // 古い在庫は削除する
              $newImportStock->currentstock_count = 0;
              $newImportStock->save();
              $newImportStock->delete();
            } else {
              // 出荷数　-　一番古い在庫で出荷数が残らない場合出荷数を記録
              $shippingStock = $stockData;
              $shippingStock['stock_count'] = $stockCount;
              $shippingStock += ['shipment_id' => $newImportStock->record_id];
              $shippingStock += ['is_edit' => 1];
              $shippingStock = StockManagement::create($shippingStock);
              $shippingStock->delete();

              $newImportStock->currentstock_count -= $stockCount;
              $newImportStock->save();
              ($newImportStock->currentstock_count === 0) && $newImportStock->delete();
              break;
            }
          } else {
            $notShppingStock = StockManagement::where('item_id', $stockData['item_id'])
              ->where('stock_status', 1)
              ->whereNull('shipment_id')->orderBy('created_at')->first();
            if ($notShppingStock != null) {
              $notShppingStock->stock_count += $stockCount;
              $notShppingStock->update();
            } else {
              $stockData['stock_count'] = $stockCount;
              StockManagement::create($stockData);
            }
            break;
          }
        }

      } else if ($stockData['stock_status'] === 2) {
        // 在庫に入力
        while ($stockCount > 0) {
          $notShppingStock = StockManagement::where('item_id', $stockData['item_id'])
                                              ->where('stock_status', 1)
                                              ->whereNull('shipment_id')->orderBy('created_at','desc')->first(); 
          if ($notShppingStock === null) {
            // 在庫なしの出庫がない
            $oldImportStock = StockManagement::where('item_id', $stockData['item_id'])
              ->where('stock_status', 2)
              ->where('currentstock_count', '!=', 0)->orderBy('created_at')->first();
            if ($oldImportStock != null)   {
              $oldImportStock->currentstock_count += $stockCount;
              $oldImportStock->update();
            } else {
              $stockData += ['currentstock_count' => $stockCount];
              StockManagement::create($stockData);
            }
            
            break;
          } else {
            // 在庫なしで出庫の場合がある
            if ($stockCount - $notShppingStock->stock_count > 0) {
              // 新製造の数が残り出荷より多い場合
              $notShppingStock->shipment_id= $stockData['record_id'];
              $notShppingStock->is_edit= 1;
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
              $notShppingStock->is_edit= 1;
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

/**
 * 保存記録を削除（一番最新記録を削除）
 * @param int recordId
 * @return result 
 */
Route::delete('record/{recordId}', function(Request $request, $recordId){
  $record = Record::where('id',$recordId)->first();
  // recordId를 가지고 있는 기록데이터가 있는지 확인
  Log::info('$record : ' . $record);

  if ($record != null) {
    $stockList = StockManagement::withTrashed()->where('record_id',$recordId)->get();
    foreach ($stockList as $stock) {
      if ($stock->stock_status == 1) {
        // 出荷を削除
        if ( $stock->shipment_id != null) {
          Log::info('$stock->shipment_id :' . $stock->shipment_id );
          $importedStock = StockManagement::withTrashed()
            ->where([['item_id', $stock->item_id], ['record_id', $stock->shipment_id]])
            ->first();
          
          $importedStock->currentstock_count = $stock->stock_count;
          $importedStock->restore();

          Log::info('importedStock : ' . $importedStock);
        }
      } else if ($stock->stock_status == 2) {
        // 製造を削除
        // まさ出荷が残っている状況での
        $shipmentStockList = StockManagement::withTrashed()
          ->where([['item_id',$stock->item_id],['shipment_id', $recordId]])
          ->get();
        foreach ($shipmentStockList as $shipmentStock) {
          $shipmentStock->shipment_id = null;
          $shipmentStock->restore();
        }
      }

      $stock->forceDelete();
    }
    $record->forceDelete();
  }
  // 
  // $post->forceDelete(); 강제 삭제
  // 제고가 많은경우
  // 출하가 많은경우
  // 
  $recordList = Record::all();
  return $recordList->toJson();
}); 