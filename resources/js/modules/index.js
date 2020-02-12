import { combineReducers } from 'redux';
import record from './record';
import navibar from './navibar';
import stockTable from './stockTable';
import page from './page';

const rootReducer = combineReducers({
  record,
  navibar,
  stockTable,
  page
});

export default rootReducer;