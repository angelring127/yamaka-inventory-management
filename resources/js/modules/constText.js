/**
 * 固定文言
 * constText.js
 */

  const initialState = {
    companyTitle: 'ヤマカ水産',
    emptyErrorMsg : '項目が有りません。',
    emptyStockErrorMsg : '入力された在庫が有りません',
    emptyItemNameErrorMsg : '商品名を入力して下さい。',
    danger: 'danger',
    error : 'エラー',
    success : '成功',
    yearMonth : '日時',
    shipment : '出荷',
    inventory : '在庫',
    manufacture : '製造',
    itemName : '商品名',
    selectedYearMonth : '選択年月',
    labelRecordNumber: 'No.',
    labelAtCreated: '登録日',
    labelEdit : '操作',
    labelDelete : '削除',
    recordTableTitle : '在庫記録リスト',
    dateformat : 'yyyy年MM月',
    exit: '終了',
    menuSave: '保存記録',
    menuAdd: '項目追加',
    btnAdd : '追加',
    saveModal : {
      exit: '終了',
      function : '保存',
      message : '入力した内容を保存しますか？',
      title : '入力保存'    
    },
    deleteRecordModal : {
      exit: '終了',
      function : '削除',
      message : '記録を削除しますか？',
      title : '記録削除'    
    },
    bigCategory:'製品カテゴリー',
    middleCategory:'種類',
  };

const constText = (state = initialState, action ) => {
  switch (action.type) {
    default:
      return state;
  }
}

export default constText;