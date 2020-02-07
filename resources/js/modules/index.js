import { combineReducers } from 'redux';
import counter from './counter';
import navibar from './navibar';
import stockTable from './stockTable';

const rootReducer = combineReducers({
  counter,
  navibar,
  stockTable
});

export default rootReducer;