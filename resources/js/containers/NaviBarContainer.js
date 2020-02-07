import React, { useEffect } from 'react';
import Navibar from '../components/Navibar';
import * as fetchNaviBar from '../fetch/fetchNaviBar';
import * as fetchStockTable from '../fetch/fetchStockTable';
import { useSelector, useDispatch } from 'react-redux';



const NaviBarContainer = () => {
  // 리덕스로부터 카운터 데이터를 내려 받음
  const dispatch = useDispatch();
  const naviBarInfo = useSelector(state => state.navibar, []);
  const stockTable = useSelector(state => state.stockTable, []);
  useEffect(() => {
    dispatch(fetchNaviBar.fetchNaviBar());
  }, []);

  const selectNaviItem = (id) => {dispatch(fetchNaviBar.selectNaviItem(id))};
  const insertStockData = (navibarId, stockDataList) => {dispatch(fetchStockTable.insertStockList(navibarId, stockDataList))};
  const handlingInsert = () => {insertStockData(naviBarInfo.currentNaviId, stockTable.insertStockDataList);}
  return (
    <Navibar naviBarInfo= {naviBarInfo} selectNaviItem= {selectNaviItem} handlingInsert={handlingInsert} />
  );
}

export default NaviBarContainer;