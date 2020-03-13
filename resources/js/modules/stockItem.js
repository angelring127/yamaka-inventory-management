/**
 * 在庫登録の為 redux modules
 */


const GET_STOCK_ITEM_LIST = 'stockItem/GET_STOCK_ITEM_LIST';
const FETCH_PENDING = 'stockItem/FETCH_PENDING';
const ADD_SUCCESS = 'stockItem/ADD_SUCCESS';
const FETCH_ERROR_MESSAGE = 'stockItem/FETCH_ERROR_MESSAGE';

export const getStockItemList = (stockItemList) => ({type : GET_STOCK_ITEM_LIST, payload: {stockItemList}});
export const onPending = () => ({ type: FETCH_PENDING});
export const addSuccess = () => ({ type: ADD_SUCCESS});
export const fetchError = (error) => ({ type: FETCH_ERROR_MESSAGE, payload: {error}});



const initialState = {
  isPending : false,
  stockItemList: [],
  addSuccess: false
};

const record = (state = initialState, action ) => {
  switch (action.type) {
    case FETCH_PENDING:
      return {
        ...state,
        isPending : true
      }
    case GET_STOCK_ITEM_LIST:
      return {
        ...state,
        isPending: false,
        stockItemList : action.payload.stockItemList
      };
    case FETCH_ERROR_MESSAGE:
      return {
        ...state,
        isPending: false,
        error: action.error
      }
    case ADD_SUCCESS:
      return {
        ...state,
        isPending: false,
        addSuccess: true,
      }
    default:
      return state;
  }
}

export default record;