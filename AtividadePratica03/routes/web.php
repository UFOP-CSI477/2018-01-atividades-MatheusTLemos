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
    return view('welcome');
});

Route::group(['middleware' => ['admin']], function () {
	Route::get('/procedimentos/create', 'proceduresController@create');
	Route::post('/procedimentos/store', 'proceduresController@store');
	Route::post('/procedimentos/update/{id}', 'proceduresController@update');
	Route::get('/procedimentos/edit/{id}', 'proceduresController@edit');
	Route::get('/procedimentos/destroy/{id}', 'proceduresController@destroy');
	Route::resource('/usuarios', 'usersController');
	Route::get('/usuarioss/filter', 'usersController@filter');
});

Route::group(['middleware' => ['operator']], function () {
	Route::get('/procedimentos/editPrice/{id}', 'proceduresController@editPrice');
	Route::post('/procedimentos/update/{id}', 'proceduresController@update');
});

Route::resource('/exames', 'testsController');

Route::get('/procedimentos/filter', 'proceduresController@filter');
Route::get('/procedimentos','proceduresController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
