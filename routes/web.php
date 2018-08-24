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

Auth::routes();

Route::get('/', 'UserController@index')->name('home');

Route::get('/myinformation','AccountController@edit')->name('user.edit');
Route::put('/update','AccountController@update')->name('user.update');


Route::get('/projects','ProjectController@index')->name('user.project')->middleware('auth');
Route::get('/projectcreate','ProjectController@create')->name('user.projectcreate');


Route::post('/projectadd','ProjectController@store')->name('user.projectadd');

Route::get('/projects/{id}','ProjectController@edit')->name('user.projectinfo');



Route::get('/myprojects/','ProjectController@show')->name('user.myprojects');

Route::get('/delete/{id}','ProjectController@destroy')->name('user.delete.project');
Route::get('/myproject/{id}','ProjectController@editmyproject')->name('user.update.project');
Route::put('/{idProject}/updatemyproject','ProjectController@update')->name('user.updatevalidate');


Route::get('/don','DonsController@show')->name('mesdons');

Route::get('/user/get/{id}','DonsController@create')->name('user.don.create');
Route::post('/user/post/{id}', 'DonsController@store')->name('user.don.store');

