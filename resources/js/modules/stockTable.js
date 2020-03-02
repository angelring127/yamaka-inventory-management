
const FETCH_STOCK_TABLE_SUCESS = 'stockTable/FETCH_SUCESS';
const FETCH_STOCK_TABLE_PENDING = 'stockTable/FETCH_PENDING';
const SELECT_STOCK_TABLE = 'stockTable/SELECT_STOCK_TABLE';
const FETCH_ERROR_MESSAGE = 'stockTable/FETCH_ERROR_MESSAGE';
const INSERT_STOCK_DATA = 'stockTable/INSERT_STOCK_DATA';
const SELECT_STOCK_LIST = 'stockTable/SELECT_STOCK_LIST';
const SET_SHIPMENT_LIST = 'stockTable/SET_SHIPMENT_LIST';



export const fetchSuccess = (stockItems) => ({ type: FETCH_STOCK_TABLE_SUCESS, payload: {stockItems}});
export const onPending = () => ({ type: FETCH_STOCK_TABLE_PENDING});
export const fetchError = (error) => ({ type: FETCH_ERROR_MESSAGE, payload: {error}});
export const insertStockData = (stockDataList) => ({ type: INSERT_STOCK_DATA, payload: {stockDataList}});
export const selectItem = (item) => ({ type: SELECT_STOCK_LIST, payload: {item}});
export const setShipmentList = (shipmentList) => ({ type: SET_SHIPMENT_LIST, payload: {shipmentList}});


  // 액션 생성
const initialState = {
  pending : false,
  stockItems : [],
  currentNavi : null,
  error: null,
  insertStockDataList: [],
  selectedItem: null,
  selectedShipmentList: null,
};

const stockTable = (state = initialState, action ) => {
  switch (action.type) {
    case FETCH_STOCK_TABLE_SUCESS:
      return {
        ...state,
        pending: false,
        stockItems: action.payload.stockItems
      };
    case FETCH_STOCK_TABLE_PENDING:
      return {
        ...state,
        pending: true
      };
    case SELECT_STOCK_TABLE:
      return {
        ...state,
        currentNavi: action.naviBar
      };
    case FETCH_ERROR_MESSAGE:
      return {
        ...state,
        pending: false,
        stockItems: [],
        error: action.payload.error
      };
    case INSERT_STOCK_DATA:
      return {
        ...state,
        insertStockDataList : action.payload.stockDataList
      };
    case SELECT_STOCK_LIST:
      return {
        ...state,
        selectedItem: action.payload.item
      };
    case SET_SHIPMENT_LIST:
      return {
        ...state,
        selectedShipmentList: action.payload.shipmentList
      };
    default:
      return state;
  }
}

export default stockTable;