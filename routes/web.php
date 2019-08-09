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

Route::get('/', 'rulesController@index');
Route::post('/addone', 'rulesController@addone')->name('addone');
Route::post('/addtwo', 'rulesController@addtwo')->name('addtwo');
Route::post('/edit', 'rulesController@edit');
Route::post('/process', 'rulesController@process');