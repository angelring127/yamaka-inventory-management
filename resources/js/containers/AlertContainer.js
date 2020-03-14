/**
 * AlertContainer.js
 * アラートの動作を定義する
 */

import React, { useEffect } from 'react';
import CommonAlert from '../components/CommonAlert';
import * as fetchNaviBar from '../fetch/fetchNaviBar';
import { useSelector, useDispatch } from 'react-redux';
import * as storeAlert from '../modules/alert';



// アラート表示コンテナー
const AlertContainer = () => {
  // 리덕스로부터 카운터 데이터를 내려 받음
  const dispatch = useDispatch();

  const handleCloseAlert = () => {
    dispatch(storeAlert.closeAlert());
  }

  return (
    <CommonAlert handleCloseAlert={handleCloseAlert} />
  );
}

export default AlertContainer;