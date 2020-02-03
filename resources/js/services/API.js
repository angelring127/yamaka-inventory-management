import axios from 'axios';

const baseURL = 'http://localhost:3000/';
const stock = 'stock';
const navi = 'navi';

const axiosApi = axios.create({
  baseURL: baseURL,
  headers: {
    'Content-Type': 'application/json',
    'X-Requested-With': 'XMLHttpRequest'
  },
  responseType: 'json'
});

