import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { createStore } from 'redux';
import rootReducer from './modules'
import { composeWithDevTools } from 'redux-devtools-extension';
import { Provider } from 'react-redux';
import CounterContainer from './containers/CounterContainer';


// Chrome で　開発ツールを利用できるようにする。
const store = createStore(rootReducer, composeWithDevTools());

if (document.getElementById('index')) {
    ReactDOM.render(
    <Provider store={store}>
      <CounterContainer />
    </Provider>
    , document.getElementById('index'));
}
