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

Route::get('/','HomeController@index');
Route::get('/dicas_saude','HomeController@dicas_saude');

Auth::routes();


//Route::get('/nova','HomeController@nova');

//Route::get('/','HomeController@acessorio');

//Route::get('/','HomeController@fale');

//Route::get('/','HomeController@contatos');

//Route::group(['middleware' => 'auth'], function () {
//	Route::get('/home', 'HomeController@index')->name('home');
//});

// Route::get('nova-solicitacao', '')