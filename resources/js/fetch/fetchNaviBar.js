import * as services from '../services/API';
import * as storeNaviBar from '../modules/navibar';
import * as storeStockTable from '../modules/stockTable';

const setNaviBar = (res, dispatch) => {
  if (res.error) {
    throw (res.error);
  }
  if (typeof res.data !== 'undefined' && res.data.length !== 0) {
    dispatch(storeNaviBar.fetchSuccess(res.data));
  }
}

//　ナビゲーションバー更新
export const fetchNaviBar = () => {
  return dispatch => {
    dispatch(storeNaviBar.onPending());
    services.getNavis()
    .then(function (res) {
      setNaviBar(res, dispatch);
    })
    .catch(error => {
      dispatch(storeNaviBar.fetchError(error));
    });
  }
}

// ナビゲーションバーアイテムを選択
export const selectNaviItem = (id) => {
  return dispatch => {
    dispatch(storeStockTable.onPending());
    dispatch(fetchNaviBar());
    services.selectNavi(id)
    .then(res => {
      if(res.error) {
        throw (res.error);
      }
      dispatch(storeNaviBar.selectNavibar(id));
      if (typeof res.data !== 'undefined' && res.data.length !== 0) {
        dispatch(storeStockTable.fetchSuccess(res.data));
      } else {
        const isEmpty = '納品の項目が有りません。';
        dispatch(storeStockTable.fetchError(isEmpty));
      }
    })
    .catch(error => {
      dispatch(storeStockTable.fetchError(error));
    });
  }
}