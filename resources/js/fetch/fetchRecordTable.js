import * as services from '../services/API';
import * as storeRecord from '../modules/record';

//　保存記録リストを持つ
export const getRecordList = () => {
  return dispatch => {
    dispatch(storeRecord.onPending());
    services.getRecords()
    .then(function (res) {
      if (res.error) {
        throw (res.error);
      }
      if (typeof res.data !== 'undefined' && res.data.length !== 0) {
        console.log(res.data);
        dispatch(storeRecord.getRecordList(res.data));
      }
    })
    .catch(error => {
      dispatch(getRecordList.fetchError(error));
    });
  }
}