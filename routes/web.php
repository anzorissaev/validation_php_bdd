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
Route::get('/projectcreate','ProjectController@create')->name('user.projectcreate');


Route::post('/projectadd','ProjectController@store')->name('user.projectadd');

Route::get('/project/{project}','ProjectController@edit')->name('user.projectinfo');



Route::get('/myprojects/','ProjectController@show')->name('user.myprojects');

Route::get('/myproject/{id}','ProjectController@editmyproject')->name('user.updateMyProject');
Route::put('/{idProject}/updatemyproject','ProjectController@update')->name('user.updatevalidate');

Route::get('/user/don/{id}','DonsController@create')->name('user.don.create');
Route::post('/user/don/{id}', 'DonsController@store')->name('user.don.store');

