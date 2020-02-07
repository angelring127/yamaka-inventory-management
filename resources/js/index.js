import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { applyMiddleware, createStore } from 'redux';
import rootReducer from './modules'
import { composeWithDevTools } from 'redux-devtools-extension';
import { Provider } from 'react-redux';
import thunk from 'redux-thunk';
import StockTableContainer from './containers/StockTableContainer';
import NaviBarContainer from './containers/NaviBarContainer';


// Chrome で　開発ツールを利用できるようにする。
const middlewares = [thunk];
const store = createStore(rootReducer, composeWithDevTools(applyMiddleware(...middlewares),));



if (document.getElementById('index')) {
    ReactDOM.render(
    <Provider store={store}>
      <NaviBarContainer />
      <StockTableContainer />
    </Provider>
    , document.getElementById('index'));
}
