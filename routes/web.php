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

Route::get('/','TaskController@index');

Route::get('/create', 'TaskController@create');
Route::get('/task/{task}', 'TaskController@show');

Route::get('/task/{task}/edit', 'TaskController@edit');
Route::post('/task', 'TaskController@store');

Route::patch('/task/{task}/update', 'TaskController@update');
Route::delete('/task/{task}/delete', 'TaskController@delete');
