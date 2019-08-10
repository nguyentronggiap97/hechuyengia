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

Route::get('/getone', 'rulesController@getone')->name('getone');
Route::post('/editone', 'rulesController@editone')->name('posteditone');

Route::get('/gettwo', 'rulesController@gettwo')->name('gettwo');
Route::post('/gettwo', 'rulesController@edittwo')->name('postedittwo');

Route::post('/edit', 'rulesController@edit');
Route::post('/remove', 'rulesController@remove')->name('remove');

Route::get('/process', 'rulesController@process')->name('process');