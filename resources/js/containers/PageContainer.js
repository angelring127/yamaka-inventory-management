import React from 'react';
import RecordTableContainer from './RecordTableContainer';
import StockTableContainer from './StockTableContainer';
import { useSelector, useDispatch } from 'react-redux';

const pageList = [
  <StockTableContainer />,
  <RecordTableContainer />
];

const PageContainer = () => {
  const pageInfo = useSelector(state => state.page, []);

  const page = pageList[pageInfo.page];

  return page;
}

export default PageContainer;

