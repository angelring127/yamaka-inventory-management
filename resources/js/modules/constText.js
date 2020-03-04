  // 액션 생성
const initialState = {
  emptyErrorMsg : '項目が有りません。',
  emptyStockErrorMsg : '入力された在庫が有りません',
  error : 'エラー',
  yearMonth : '日時',
  shipment : '出荷',
  inventory : '在庫',
  manufacture : '製造',
  itemName : '商品名',
  selectedYearMonth : '選択年月',
  dateformat : 'yyyy年MM月',
  saveModal : {
    exit: '終了',
    function : '保存',
    messgae : '入力した内容を保存しますか？',
    title : '入力保存'    
  },
};

const constText = (state = initialState, action ) => {
  switch (action.type) {
    default:
      return state;
  }
}

export default constText;