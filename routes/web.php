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

Route::get('/','StaticPagesController@home');
Route::get('/help',"StaticPagesController@help");
Route::get('/about','StaticPagesController@about');

//登录页面
Route::get('signup','UsersController@create')->name('signup');

//用户路由
Route::resource('users','UsersController');
