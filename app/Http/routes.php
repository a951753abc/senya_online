<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('home', 'Senya\SenyaController@index');
Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/version', ['as'=>'admin.index','uses'=>'Admin\VersionController@index']);
Route::post('admin/version', ['as'=>'admin.store','uses'=>'Admin\VersionController@store']);
Route::get('roll','SlackController@roll');
Route::get('vote','SlackController@vote');
Route::get('test','SlackController@roll_test');

// 認證路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// // 註冊路由...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');