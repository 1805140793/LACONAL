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

Route::get('/', 'LBController@index');
Route::get('/home', 'LBController@home');
Route::get('/cotizacion', 'LBController@cotizacion');
Route::get('/pedido', 'LBController@pedido');
Route::get('/recepcion', 'LBController@recepcion');
Route::get('/resultados', 'LBController@resultados');






