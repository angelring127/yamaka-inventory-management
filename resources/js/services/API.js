import axios from 'axios';

const baseURL = 'http://localhost:3000/'; //本番環境
// const baseURL = 'http://localhost:8000/'; //テスト環境
const stock = 'stock';
const navi = 'navi'; //navigationBar情報
const csrf = document.getElementsByName('csrf-token'); //laravel CSRF token
const axiosApi = axios.create({
  baseURL: baseURL,
  headers: {
    'Content-Type': 'application/json',
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': csrf[0].content
  },
  responseType: 'json'
});

export const getNavis = () => {
  return axiosApi.get(navi);
};

// ナビゲーションバーアイテムを選択するとそのアイテムのテーブルが表示
export const selectNavi = (id) => {
  return axiosApi.get(stock + '/' + id);
}

// 在庫入力登録
export const insertStockDataList = (data) => {
  console.log(data);
  const param = { stockList : data };
  const jsonParam = JSON.stringify(data);
  return axiosApi.post(stock, jsonParam);
}