/**
 * NaviBarContainer.js
 * 
 */
import React, { useEffect } from 'react';
import Navibar from '../components/Navibar';
import * as fetchNaviBar from '../fetch/fetchNaviBar';
import * as fetchStockTable from '../fetch/fetchStockTable';
import * as stockTable from '../modules/stockTable';
import { setPage } from '../modules/page';
import { useSelector, useDispatch } from 'react-redux';



const NaviBarContainer = () => {
  // 리덕스로부터 카운터 데이터를 내려 받음
  const dispatch = useDispatch();

  useEffect(() => {
    dispatch(fetchNaviBar.fetchNaviBar());
  }, []);

  const selectNaviItem = (id) => {
    dispatch(setPage(0));
    dispatch(fetchNaviBar.selectNaviItem(id));
  };
  const selectSettings = e => {
    const currentTarget = e.currentTarget;
    dispatch(setPage(currentTarget.getAttribute('page')));
  }
  // 在庫入力保存
  const insertStockData = () => {dispatch(stockTable.insertStockData())};
  // 修正モード変更
  const changeIsEdit = () => {dispatch(stockTable.changeIsEdit())};

  return (
    <Navibar
      selectNaviItem= {selectNaviItem} 
      handlingInsert={insertStockData} 
      selectSettings={selectSettings}
      changeIsEdit={changeIsEdit}
    />
  );
}

export default NaviBarContainer;