import React, { useEffect } from 'react';
import Navibar from '../components/Navibar';
import * as fetchNaviBar from '../fetch/fetchNaviBar';
import * as fetchStockTable from '../fetch/fetchStockTable';
import * as storeNaviBar from '../modules/navibar';
import { setPage } from '../modules/page';
import { useSelector, useDispatch } from 'react-redux';



const NaviBarContainer = () => {
  // 리덕스로부터 카운터 데이터를 내려 받음
  const dispatch = useDispatch();
  const naviBarInfo = useSelector(state => state.navibar, []);
  const stockTable = useSelector(state => state.stockTable, []);
  useEffect(() => {
    dispatch(fetchNaviBar.fetchNaviBar());
  }, []);

  const selectNaviItem = (id) => {
    dispatch(setPage(0));
    dispatch(fetchNaviBar.selectNaviItem(id));
  };
  const selectRecordTable = () => {
    dispatch(setPage(1));
  }
  const insertStockData = (navibarId, stockDataList) => {dispatch(fetchStockTable.insertStockList(navibarId, stockDataList))};

  let isAlert = false;
  const handlingInsert = () => {
    if (stockTable.insertStockDataList.length > 0) {
      insertStockData(naviBarInfo.currentNaviId, stockTable.insertStockDataList);
    } else {
      dispatch(storeNaviBar.showAlert());
    }
  };
  return (
    <Navibar
      selectNaviItem= {selectNaviItem} 
      handlingInsert={handlingInsert} 
      selectRecordTable={selectRecordTable}
    />
  );
}

export default NaviBarContainer;