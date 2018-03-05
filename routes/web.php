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
Route::delete('/master/centre/delete','Master\CentreController@delete')->name('master.centre.delete');
Route::post('/master/centre/create','Master\CentreController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
* For Centre-end - Every Centre view routes goes here
*/
Route::group(['prefix' => 'centre', 'middleware' => 'centre_auth'], function(){
  Route::get('/', 'Centre\HomeController@index')->name('centre.index');
  Route::get('login', 'Centre\LoginController@index')->name('centre.login');
  Route::post('login', 'Centre\LoginController@authenticate')->name('centre.authenticate');

  Route::post('request/account', 'Centre\RequestController@account')->name('centre.request.account.send');
  
  // Tor routes goes here

});
