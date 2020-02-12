import { combineReducers } from 'redux';
import counter from './counter';
import navibar from './navibar';
import stockTable from './stockTable';
import page from './page';

const rootReducer = combineReducers({
  counter,
  navibar,
  stockTable,
  page
});

export default rootReducer;