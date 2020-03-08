/**
 * fetchStockItem.js
 * 在庫項目情報取得
 */

import * as services from '../services/API';
import * as storeStockItem from '../modules/stockItem';
import * as storeAlert from '../modules/alert';

//在庫項目リスト取得
export const getStockItemList = () => {
  return dispatch => {
    dispatch(storeStockItem.onPending());
    services.getStockItemList()
    .then(function (res) {
      if (res.error) {
        throw (res.error);
      }
      if (typeof res.data !== 'undefined' && res.data.length !== 0) {
        dispatch(storeStockItem.getStockItemList(res.data));
      }
    })
    .catch(error => {
      dispatch(storeStockItem.fetchError(error));
    });
  }
}

//　商品登録
export const addItem = (itemData) => {
  return dispatch => {
    dispatch(storeStockItem.onPending());
    services.addStockItem(itemData)
    .then(function (res) {
      if (res.error) {
        throw (res.error);
      }
      if (typeof res.data !== 'undefined' && res.data){
        dispatch(storeStockItem.addSuccess());
        dispatch(storeAlert.showAlert('商品登録を成功しました。','success'));
      }
    })
    .catch(error => {
      dispatch(getRecordList.fetchError(error));
    });
  }
}