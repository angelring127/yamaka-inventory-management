/**
 * ナビゲーションバー用のredux modules
 */

const FETCH_NAVIBAR_SUCESS = 'navibar/FETCH_SUCESS';
const FETCH_NAVIBAR_PENDING = 'navibar/FETCH_PENDING';
const SELECT_NAVIBAR = 'navibar/SELECT_NAVIBAR';
const FETCH_ERROR_MESSAGE = 'navibar/FETCH_ERROR_MESSAGE';
const SHOW_ALERT = 'navibar/SHOW_ALERT';

export const fetchSuccess = (naviItems) => ({ type: FETCH_NAVIBAR_SUCESS, payload: {naviItems}});
export const onPending = () => ({ type: FETCH_NAVIBAR_PENDING});
export const fetchError = (error) => ({ type: FETCH_ERROR_MESSAGE, payload: {error}});
export const selectNavibar = (navibarId) => ({ type: SELECT_NAVIBAR, payload: {navibarId}});
export const showAlert = () => ({type:SHOW_ALERT})

  // 액션 생성
const initialState = {
  pending : false,
  naviItems : [],
  currentNaviId : 1,  //初期IDは1に固定する
  error: null,
  isAlert : false,
};

const navibar = (state = initialState, action ) => {
  switch (action.type) {
    case FETCH_NAVIBAR_SUCESS:
      return {
        ...state,
        pending: false,
        naviItems: action.payload.naviItems
      };
    case FETCH_NAVIBAR_PENDING:
      return {
        ...state,
        pending: true
      };
    case SELECT_NAVIBAR:
      return {
        ...state,
        currentNaviId: action.payload.navibarId
      };
    case FETCH_ERROR_MESSAGE:
      return {
        ...state,
        pending: false,
        error: action.error
      };
    case SHOW_ALERT:
      return {
        ...state,
        isAlert : true
      };
    default:
      return state;
  }
}

export default navibar;