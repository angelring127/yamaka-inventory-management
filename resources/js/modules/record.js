/**
 * modules/reocrd.js
 * 在庫保存記録用の redux modules
 */


const GET_RECORD_LIST = 'record/GET_RECORD_LIST';
const FETCH_RECORD_PENDING = 'record/FETCH_PENDING';
const FETCH_ERROR_MESSAGE = 'record/FETCH_ERROR_MESSAGE';

export const getRecordList = (recordList) => ({type : GET_RECORD_LIST, payload: {recordList}});
export const onPending = () => ({ type: FETCH_RECORD_PENDING});
export const fetchError = (error) => ({ type: FETCH_ERROR_MESSAGE, payload: {error}});



const initialState = {
  isPending : false,
  recordList: []
};

const record = (state = initialState, action ) => {
  switch (action.type) {
    case FETCH_RECORD_PENDING:
      return {
        ...state,
        isPending : true
      }
    case GET_RECORD_LIST:
      return {
        ...state,
        isPending: false,
        recordList : action.payload.recordList
      };
    case FETCH_ERROR_MESSAGE:
      return {
        ...state,
        isPending: false,
        error: action.error
      }
    default:
      return state;
  }
}

export default record;