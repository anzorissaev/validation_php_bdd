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

Route::get('/edit','AccountController@edit')->name('user.edit');
Route::put('/update','AccountController@update')->name('user.update');


Route::get('/project','ProjectController@index')->name('user.project');
Route::get('/projectcreate','ProjectController@create')->name('user.projectcreate');


Route::post('/projectadd','ProjectController@store')->name('user.projectadd');

Route::get('/project/{project}','ProjectController@edit')->name('user.projectinfo')->middleware('auth');



Route::get('/myprojects/','ProjectController@show')->name('user.myprojects');

Route::get('/delete/{id}','ProjectController@destroy')->name('user.delete.project');
Route::get('/myproject/{id}','ProjectController@editmyproject')->name('user.update.project');
Route::put('/{idProject}/updatemyproject','ProjectController@update')->name('user.updatevalidate');


Route::get('/don','DonsController@index');

Route::get('/user/get/{id}','DonsController@create')->name('user.don.create');
Route::post('/user/post/{id}', 'DonsController@store')->name('user.don.store');

