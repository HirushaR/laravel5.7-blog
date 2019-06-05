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

Route::get('/','SummernoteController@index' );
Route::post('insert','SummernoteController@insert');
Route::get('viewCode','SummernoteController@viewCode');
Route::get('readInfo/{id}','SummernoteController@readInfo');
Route::get('deleteInfo/{id}','SummernoteController@deleteInfo');
Route::get('editInfo/{id}','SummernoteController@editInfo');
Route::post('updateInfo','SummernoteController@updateInfo');
