import { combineReducers } from 'redux';
import record from './record';
import navibar from './navibar';
import stockTable from './stockTable';
import page from './page';
import constText from './constText';
import alert from './alert';
import stockItem from './stockItem';

const rootReducer = combineReducers({
  record,
  navibar,
  stockTable,
  page,
  constText,
  alert,
  stockItem
});

export default rootReducer;