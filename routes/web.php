<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'app');
Route::get('/navi', 'StockController@navi');
Route::get('/stock/{id}', 'StockController@selectNavi');
Route::post('/stock', 'StockController@insertStockList');