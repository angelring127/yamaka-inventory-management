
/**
 * アラート用のmodules
 * alert.js
 */

const SHOW_ALERT = 'alert/SHOW_ALERT';
const CLOSE_ALERT = 'alert/CLOSE_ALERT';

export const showAlert = (message,status) => ({ type: SHOW_ALERT, payload: {message, status}});
export const closeAlert = () => ({ type: CLOSE_ALERT});

  // 액션 생성
const initialState = {
  isAlert : false,
  message : null,
  status : 'danger'
};

const navibar = (state = initialState, action ) => {
  switch (action.type) {
    case SHOW_ALERT:
      return {
        ...state,
        isAlert: true,
        message: action.payload.message,
        status: action.payload.status,
      };
    case CLOSE_ALERT:
      return {
        ...state,
        isAlert: false,
        message: null
      };
    default:
      return state;
  }
}

export default navibar;