  // 액션 생성
const initialState = {
  emptyErrorMsg : '項目が有りません。',
  yearMonth : '日時',
  shipment : '出荷',
  inventory : '在庫',
  manufacture : '製造',
  itemName : '商品名',
};

const constText = (state = initialState, action ) => {
  switch (action.type) {
    default:
      return state;
  }
}

export default constText;