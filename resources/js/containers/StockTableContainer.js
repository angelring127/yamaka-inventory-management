import React, { useEffect } from 'react';
import StockTable from '../components/StockTable';
import * as fetchNaviBar from '../fetch/fetchNaviBar';
import { useSelector, useDispatch } from 'react-redux';
import * as storeStockTable from '../modules/stockTable';
import * as storeAlert from '../modules/alert';
import * as fetchStockTable from '../fetch/fetchStockTable';



// 在庫入力コンテー
const StockTableContainer = () => {
  // 리덕스로부터 카운터 데이터를 내려 받음
  const dispatch = useDispatch();
  const naviBarInfo = useSelector(state => state.navibar, []);
  const constText = useSelector(state => state.constText, []);
  
  useEffect(() => {
    if (!naviBarInfo.pending) {
      dispatch(fetchNaviBar.selectNaviItem(naviBarInfo.currentNaviId));
    }
  }, []);

  // カレンダーに在庫の現像を表示するため選択された在庫ストアに保管
  const selectItem = (selectItem) => {dispatch(storeStockTable.selectItem(selectItem))};

  const insertStockData = (stockDataList) => {dispatch(fetchStockTable.insertStockList(naviBarInfo.currentNaviId, stockDataList))};

  const editStockData = (stockDataList) => {dispatch(fetchStockTable.editStockList(naviBarInfo.currentNaviId, stockDataList))};

  // 在庫入力がない事をアラートで表示
  const handleShowAlert = () => {dispatch(storeAlert.showAlert(constText.emptyStockErrorMsg, constText.danger))};
  const handleCancelInsertStockData = () => {dispatch(storeStockTable.cancelInsertStockData())};

  // handlerを配列で整理
  const stockTableHandler = {
    insertStockData: insertStockData,
    handleShowAlert: handleShowAlert,
    handleCancelInsertStockData: handleCancelInsertStockData,
    editStockData: editStockData,
  };

  return (
    <StockTable selectItem={selectItem} handler = {stockTableHandler} />
  );
}

export default StockTableContainer;