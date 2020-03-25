/**
 * fetchStockTable.js
 * 在庫リストに関してAPI通信関連
 */

import * as services from '../services/API';
import * as storeStockTable from '../modules/stockTable';
import * as fetchNaviBar from '../fetch/fetchNaviBar';


export const insertStockList = (navibarId, stockDataList) => {
  return dispatch => {
    dispatch(storeStockTable.onPending());
    services.insertStockDataList(stockDataList)
    .then(res => {
      if (!res.error) {
        dispatch(storeStockTable.successInsertStockData());
        dispatch(fetchNaviBar.selectNaviItem(navibarId));
      }
    }).catch(error =>{
      const isFail = '登録に失敗しました。';
      dispatch(storeStockTable.fetchError(isFail));
    })
  }
}

export const editStockList = (navibarId, stockDataList) => {
  return dispatch => {
    dispatch(storeStockTable.onPending());
    services.editStockDataList(stockDataList)
    .then(res => {
      if (!res.error) {
        dispatch(storeStockTable.successInsertStockData());
        dispatch(fetchNaviBar.selectNaviItem(navibarId));
        dispatch(storeStockTable.changeIsEdit());
      }
    }).catch(error =>{
      const isFail = '登録に失敗しました。';
      dispatch(storeStockTable.fetchError(isFail));
    })
  }
}


/**
 * 日付に対象される出荷リストをだす。
 * @param id item_id
 * @param yearMonth date 'yyyymm'
 */
export const getShipmentList = (id, yearMonth) => {
  return dispatch => {
    dispatch(storeStockTable.onPendingForShippment());
    services.getShipmentList(id, yearMonth)
    .then(res => {
      if (!res.error) {
        dispatch(storeStockTable.setShipmentList(res.data))
      }
    }).catch(error => {
      dispatch(storeStockTable.fetchShippmentError(error));
    })
  }
}
