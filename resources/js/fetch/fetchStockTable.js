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
        dispatch(fetchNaviBar.selectNaviItem(navibarId));
      }
    }).catch(error =>{
      const isFail = '登録に失敗しました。';
      dispatch(storeStockTable.fetchError(isFail));
    })
  }
}