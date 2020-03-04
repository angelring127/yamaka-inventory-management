import * as services from '../services/API';
import * as storeNaviBar from '../modules/navibar';
import * as storeStockTable from '../modules/stockTable';
import * as fetchNaviBar from '../fetch/fetchNaviBar';


export const insertStockList = (navibarId, stockDataList) => {
  return dispatch => {
    dispatch(storeStockTable.onPending());
    console.log(stockDataList);
    services.insertStockDataList(stockDataList)
    .then(res => {
      console.log(res);
      if (!res.error) {
        console.log('refresh');
        dispatch(storeStockTable.successInsertStockData());
        dispatch(fetchNaviBar.selectNaviItem(navibarId));
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
    dispatch(storeStockTable.onPending());
    services.getShipmentList(id, yearMonth)
    .then(res => {
      console.log(res);
      if (!res.error) {
        dispatch(storeStockTable.setShipmentList(res.data))
      }
    }).catch(error => {
      dispatch(storeStockTable.fetchError(error));
    })
  }
}
