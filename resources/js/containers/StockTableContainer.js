import React, { useEffect } from 'react';
import StockTable from '../components/StockTable';
import * as fetchNaviBar from '../fetch/fetchNaviBar';
import { useSelector, useDispatch } from 'react-redux';
import * as storeStockTable from '../modules/stockTable';



// 在庫入力コンテー
const StockTableContainer = () => {
  // 리덕스로부터 카운터 데이터를 내려 받음
  const dispatch = useDispatch();
  const stockTable = useSelector(state => state.stockTable, []);
  const naviBarInfo = useSelector(state => state.navibar, []);
  useEffect(() => {
    if (!naviBarInfo.pending) {
      dispatch(fetchNaviBar.selectNaviItem(naviBarInfo.currentNaviId));
    }
  }, []);

  // 方品入力登録
  const insertStockData = (insertStockDataList) => {dispatch(storeStockTable.insertStockData(insertStockDataList))};
  // カレンダーに在庫の現像を表示するため選択された在庫ストアに保管
  const selectStockList = (selectStockList) => {dispatch(storeStockTable.selectStockList(selectStockList))};

  //在庫入力をリストに追加 
  const insertData = e => {
    let beforeInsertStockDataList = stockTable.insertStockDataList;
    const currentTarget = e.currentTarget;
    const itemId = currentTarget.getAttribute('item_id');
    const middleCategoryId = currentTarget.getAttribute('middle_category_id');
    const bigCategoryId = currentTarget.getAttribute('big_category_id');
    const status = (currentTarget.getAttribute('name') === "export") ? 1 : 2;
    const checkCode = bigCategoryId + middleCategoryId + itemId + status;
    // 数字以外文字を入力する場合削除
    if(isNaN(Number(currentTarget.innerHTML))) {
      currentTarget.innerHTML = currentTarget.innerHTML.replace(/\D/,'');
    } else {
      const stockCount = Number(currentTarget.innerHTML);
      if (stockCount === 0) { 
        beforeInsertStockDataList = beforeInsertStockDataList.filter(stockData => {
          const check = stockData.big_category_id + stockData.middle_category_id + stockData.item_id + stockData.stock_status;
          return check !== checkCode;
        });
      } else {
        let isDuplicate = false;
        beforeInsertStockDataList = beforeInsertStockDataList.map(stockData => {
          const check = stockData.big_category_id + stockData.middle_category_id + stockData.item_id + stockData.stock_status;
          if (check === checkCode) {
            isDuplicate = true;
            stockData.stock_count = stockCount;
          }
          return stockData;
        });
        if (!isDuplicate) {
          // 項目追加
          beforeInsertStockDataList[beforeInsertStockDataList.length] = {
            stock_status : status,
            stock_count : stockCount,
            item_id : itemId,
            middle_category_id : middleCategoryId,
            big_category_id: bigCategoryId
          };
        }
      }
      insertStockData(beforeInsertStockDataList);
    }
  };

  return (
    <StockTable stockTableInfo={stockTable} insertData={insertData} selectStockList={selectStockList} />
  );
}

export default StockTableContainer;