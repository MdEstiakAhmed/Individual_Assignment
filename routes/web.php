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

Route::get('/registration', 'GeneralController\RegistrationController@index');

Route::post('/registration', 'GeneralController\RegistrationController@insert');

Route::get('/busManagerList', 'AdminController\HomeController@index');

Route::get('/busManagerDelete/{id}', 'AdminController\HomeController@delete');

Route::get('/supportStuffList', 'AdminController\HomeController@stuffList');

Route::post('/searching', 'AdminController\HomeController@search');

Route::get('/addSupportStuff', 'AdminController\HomeController@addSupportStuff');

Route::post('/addSupportStuff', 'AdminController\HomeController@InsertSupportStuff');

Route::get('/busCounterList', 'BusManagerController\HomeController@busCounterList');

Route::get('/addBusCounter', 'BusManagerController\HomeController@addBusCounter');

Route::post('/addBusCounter', 'BusManagerController\HomeController@insertBusCounter');

Route::get('/busList', 'AdminController\HomeController@busList');

Route::get('/addBus', 'AdminController\HomeController@addBus');

Route::post('/addBus', 'AdminController\HomeController@insertBus');

Route::get('/editBus/{busId}', 'AdminController\HomeController@editBus');

Route::post('/editBus/{busId}', 'AdminController\HomeController@updateBus');

