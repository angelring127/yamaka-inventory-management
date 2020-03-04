import React, { useEffect } from 'react';
import StockTable from '../components/StockTable';
import * as fetchNaviBar from '../fetch/fetchNaviBar';
import { useSelector, useDispatch } from 'react-redux';
import * as storeStockTable from '../modules/stockTable';



// 在庫入力コンテー
const StockTableContainer = () => {
  // 리덕스로부터 카운터 데이터를 내려 받음
  const dispatch = useDispatch();
  const naviBarInfo = useSelector(state => state.navibar, []);
  useEffect(() => {
    if (!naviBarInfo.pending) {
      dispatch(fetchNaviBar.selectNaviItem(naviBarInfo.currentNaviId));
    }
  }, []);

  // カレンダーに在庫の現像を表示するため選択された在庫ストアに保管
  const selectItem = (selectItem) => {dispatch(storeStockTable.selectItem(selectItem))};


  return (
    <StockTable selectItem={selectItem} />
  );
}

export default StockTableContainer;