/**
 * API.js
 */
import axios from 'axios';

const baseURL = 'https://yamaka-inventory.com/api/'; //本番環境
// const baseURL = 'http://192.168.11.65:3000/api/'; //本番環境

// const baseURL = 'http://localhost:8000/api'; //テスト環境
const stock = 'stock';
const navi = 'navi'; //navigationBar情報
const record = 'record'; //保存した記録
const csrf = document.getElementsByName('csrf-token'); //laravel CSRF token
const axiosApi = axios.create({
  baseURL: baseURL,
  headers: {
    'Content-Type': 'application/json',
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': csrf[0].content
  },
  responseType: 'json',
    xhrFields: {
      withCredentials: true
  }
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
  const jsonParam = JSON.stringify(data);
  return axiosApi.post(stock, jsonParam);
}

// 在庫入力修正
export const editStockDataList = (data) => {
  const jsonParam = JSON.stringify(data);
  return axiosApi.post(stock + '/edit', jsonParam);
}

// 保存記録を呼び出す。
export const getRecords = () => {
  return axiosApi.get(record);
}

// 在庫記録削除
export const deleteRecords = (recordId) => {
  return axiosApi.delete(record + '/' + recordId);
}

// 選択された日付の出荷リストをだす。
export const getShipmentList = (id, yearMonth) => {
  return axiosApi.get(stock + '/' + id + '/' + yearMonth);
}

// 在庫項目取得
export const getStockItemList = () => {
  return axiosApi.get(stock);
}

// 商品項目追加
export const addStockItem = (data) => {
  const jsonParam = JSON.stringify(data);
  return axiosApi.post(stock + '/item', jsonParam);
}