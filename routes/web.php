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

Route::get('/', function () {
    return view('user.login');
});

Route::get('user-registration', [
	'uses'=>'User\UserController@showRegistarionForm',
	'as'=>'user-registration'
]);
Route::post('user-registration', [
	'uses'=>'User\UserController@userSave',
	'as'=>'user-save'
]);
Route::post('user-update', [
	'uses'=>'User\UserController@useUpdate',
	'as'=>'user-update'
]);
Route::get('/user-list', 'User\UserController@user_list');
Route::get('/user-edit/{id}', 'User\UserController@user_edit');
//Route::post('/user-update', 'User\UserController@user_update');
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/bands', 'Admin\BandsController@bands');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
