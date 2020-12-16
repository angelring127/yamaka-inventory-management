/**
 * modules/stockTable.js
 * 在庫画面用の　redux modules
 */
const FETCH_STOCK_TABLE_SUCESS = 'stockTable/FETCH_SUCESS';
const FETCH_STOCK_TABLE_PENDING = 'stockTable/FETCH_PENDING';
const FETCH_SHIPPMENT_PENDING = 'stockTable/FETCH_SHIPPMENT_PENDING';
const SELECT_STOCK_TABLE = 'stockTable/SELECT_STOCK_TABLE';
const FETCH_ERROR_MESSAGE = 'stockTable/FETCH_ERROR_MESSAGE';
const FETCH_SHIPPMENT_ERROR_MESSAGE = 'stockTable/FETCH_SHIPPMENT_ERROR_MESSAGE';
const INSERT_STOCK_DATA = 'stockTable/INSERT_STOCK_DATA';
const SUCCESS_INSERT_STOCK_DATA = 'stockTable/SUCCESS_INSERT_STOCK_DATA';
const CANCEL_INSERT_STOCK_DATA = 'stockTable/CANCEL_INSERT_STOCK_DATA';
const SELECT_STOCK_LIST = 'stockTable/SELECT_STOCK_LIST';
const SET_SHIPMENT_LIST = 'stockTable/SET_SHIPMENT_LIST';
const FRESH_INSERT_STOCK_DATALIST = 'stockTable/FRESH_INSERT_STOCK_DATALIST';
const CHANGE_IS_EDIT = 'stockTable/CHANGE_IS_EDIT';



export const fetchSuccess = (res) => ({ type: FETCH_STOCK_TABLE_SUCESS, payload: {res}});
export const onPending = () => ({ type: FETCH_STOCK_TABLE_PENDING});
export const onPendingForShippment = () => ({ type: FETCH_SHIPPMENT_PENDING});
export const fetchError = (error) => ({ type: FETCH_ERROR_MESSAGE, payload: {error}});
export const fetchShippmentError = (error) => ({ type: FETCH_SHIPPMENT_ERROR_MESSAGE, payload: {error}});
export const insertStockData = () => ({ type: INSERT_STOCK_DATA, });
export const successInsertStockData = () => ({type: SUCCESS_INSERT_STOCK_DATA});
export const cancelInsertStockData = () => ({type: CANCEL_INSERT_STOCK_DATA});
export const selectItem = (item) => ({ type: SELECT_STOCK_LIST, payload: {item}});
export const setShipmentList = (shipmentList) => ({ type: SET_SHIPMENT_LIST, payload: {shipmentList}});
export const freshInsertStockDataList = () => ({ type: FRESH_INSERT_STOCK_DATALIST});
export const changeIsEdit = () => ({type: CHANGE_IS_EDIT});


  // 액션 생성
const initialState = {
  isPending : false,
  isPendingForModal : false,
  stockItems : [],
  currentNavi : null,
  error: null,
  isInsertStockData: false,
  selectedItem: null,
  selectedShipmentList: null,
  isEdit: false,
  selectedBigcategory: null,
};

const stockTable = (state = initialState, action ) => {
  switch (action.type) {
    case FETCH_STOCK_TABLE_SUCESS:
      return {
        ...state,
        isPending: false,
        stockItems: action.payload.res.items,
        selectedBigcategory: action.payload.res.bigcategory,
      };
    case FETCH_STOCK_TABLE_PENDING:
      return {
        ...state,
        isPending: true
      };
    case FETCH_SHIPPMENT_PENDING:
      return {
        ...state,
        isPendingForModal: true
      };
    case SELECT_STOCK_TABLE:
      return {
        ...state,
        currentNavi: action.naviBar
      };
    case FETCH_ERROR_MESSAGE:
      return {
        ...state,
        isPending: false,
        stockItems: [],
        error: action.payload.error
      };
    case FETCH_SHIPPMENT_ERROR_MESSAGE:
      return {
        ...state,
        isPendingForModal: false,
        stockItems: [],
        error: action.payload.error
      };
    case INSERT_STOCK_DATA:
      return {
        ...state,
        isInsertStockData : true
      };
    case CANCEL_INSERT_STOCK_DATA:
      return {
        ...state,
        isInsertStockData : false
      };
    case SUCCESS_INSERT_STOCK_DATA:
      return {
        ...state,
        isPending : false,
        isInsertStockData : false
      };
    case SELECT_STOCK_LIST:
      return {
        ...state,
        selectedItem: action.payload.item
      };
    case SET_SHIPMENT_LIST:
      return {
        ...state,
        isPendingForModal : false,
        selectedShipmentList: action.payload.shipmentList
      };
    case CHANGE_IS_EDIT:
      return {
        ...state,
        isEdit: !state.isEdit
      };
    default:
      return state;
  }
}

export default stockTable;