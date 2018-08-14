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

    $user = Auth::user();
    return view('home', ['user' => $user]);
});

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');

Route::get('/edit','AccountController@edit')->name('user.edit');
Route::put('/update','AccountController@update')->name('user.update');


Route::get('/project','ProjectController@index')->name('user.project');
Route::get('/creatproject','ProjectController@create')->name('user.creatproject');