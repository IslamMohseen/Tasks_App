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
Route::get('/','TasksController@welcome');

Route::get('/tasks','TasksController@index');
Route::get('/task/{id}','TasksController@show');

Route::get('/create','TasksController@create');
Route::post('/create','TasksController@store');

Route::get('/task/{id}/edit','TasksController@edit');
Route::post('/task/{id}','TasksController@update');
Route::get('/task/{id}/delete','TasksController@destroy');
Route::get('/task/{id}/complete','TasksController@complete');


