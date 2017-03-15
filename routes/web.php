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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'ArticlesController@getIndex');
Route::get('/article/{id}', 'ArticlesController@getShow');
Route::get('/article/create', 'ArticlesController@getCreate');
//Route::post('/article/create', 'ArticlesController@postCreate');