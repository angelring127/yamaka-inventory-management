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

// const setNaviBar = (res, dispatch) => {
//   if (res.error) {
//     throw (res.error);
//   }
//   if (typeof res.data !== 'undefined' && res.data.length !== 0) {
//     dispatch(storeNaviBar.fetchSuccess(res.data));
//   }
// }

// //　ナビゲーションバー更新
// export const fetchNaviBar = () => {
//   return dispatch => {
//     dispatch(storeNaviBar.onPending());
//     services.getNavis()
//     .then(function (res) {
//       setNaviBar(res, dispatch);
//     })
//     .catch(error => {
//       dispatch(storeNaviBar.fetchError(error));
//     });
//   }
// }

// // ナビゲーションバーアイテムを選択
// export const selectNaviItem = (id) => {
//   return dispatch => {
//     dispatch(storeStockTable.onPending());
//     dispatch(fetchNaviBar());
//     services.selectNavi(id)
//     .then(res => {
//       if(res.error) {
//         throw (res.error);
//       }
//       dispatch(storeNaviBar.selectNavibar(id));
//       if (typeof res.data !== 'undefined' && res.data.length !== 0) {
//         dispatch(storeStockTable.fetchSuccess(res.data));
//       } else {
//         const isEmpty = '納品の項目が有りません。';
//         dispatch(storeStockTable.fetchError(isEmpty));
//       }
//     })
//     .catch(error => {
//       dispatch(storeStockTable.fetchError(error));
//     });
//   }
// }