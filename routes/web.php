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

/*Auth::routes();
Route::get('/home', 'HomeController@index');*/
//Usuario

//Route::resource('usuario','usuariosController');

Route::get('/','usuariosController@index');
Route::get('/index','usuariosController@showAll');
Route::get('/create','usuariosController@create');
Route::get('/edit','usuariosController@edit');
Route::get('/details','usuariosController@details');


Route::get('/login','usuariosController@login');
Route::post('/logar','usuariosController@logar');
Route::get('/logout','usuariosController@logout');


Route::group(['middleware' => ['web']], function(){
    Route::resource('usuario', 'usuariosController');
});

/*Auth::routes();

Route::get('/home', 'HomeController@index');*/
