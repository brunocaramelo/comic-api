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

Route::get('/', '\Domain\Admin\Users\Http\UsersController@index');
Route::get('/item/{id}', '\Domain\Admin\Users\Http\UsersController@viewItem');
