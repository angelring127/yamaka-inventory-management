
/**
 * アラート用のmodules
 */

const SHOW_ALERT = 'alert/SHOW_ALERT';
const CLOSE_ALERT = 'alert/CLOSE_ALERT';

export const showAlert = (message) => ({ type: SHOW_ALERT, payload: {message}});
export const closeAlert = () => ({ type: CLOSE_ALERT});

  // 액션 생성
const initialState = {
  isAlert : false,
  message : null,
};

const navibar = (state = initialState, action ) => {
  switch (action.type) {
    case SHOW_ALERT:
      return {
        ...state,
        isAlert: true,
        message: action.payload.message
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