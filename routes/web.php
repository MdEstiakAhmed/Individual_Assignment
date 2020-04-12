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
Route::get('/logout', 'GeneralController\LogoutController@index');

Route::get('/', 'GeneralController\LoginController@index');

Route::post('/', 'GeneralController\loginController@formValidation')->name('login.formValidation');

Route::get('/home', 'GeneralController\loginController@authorization')->name('login.authorization');

