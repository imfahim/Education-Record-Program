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
    return view('master.index');
});


Route::get('/master/centre/index','Master\CentreController@index')->name('master.centre.index');
Route::get('/master/centre/create','Master\CentreController@create')->name('master.centre.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Centre
Route::get('/centre', function(){
  return view('centre.index');
});
