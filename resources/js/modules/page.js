/**
 * 画面ページ用の　redux modules
 */

const SET_PAGE = 'page/SELECT_NAVIBAR';

export const setPage = (page) => ({ type: SET_PAGE, payload: {page}});

  // 初期ページは在庫テーブル
const initialState = {
  page: 0
};

const page = (state = initialState, action ) => {
  switch (action.type) {
    case SET_PAGE:
      return {
        ...state,
        page: action.payload.page
      };
    default:
      return state;
  }
}

export default page;