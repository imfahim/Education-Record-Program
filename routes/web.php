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




Route::get('/centre/professional/index','Centre\ProfessionalController@index')->name('centre.professional.index');
Route::get('/centre/professional/create','Centre\ProfessionalController@create')->name('centre.professional.create');
Route::get('/centre/professional/assign/in/{id}','Centre\ProfessionalController@assign')->name('centre.professional.assign');
Route::post('/centre/professional/assign/search', 'Centre\ProfessionalController@search')->name('centre.professional.assign.search');
Route::get('/centre/professional/assign/{prof_id}/{std_id}', 'Centre\ProfessionalController@attemptAssign')->name('centre.professional.assign.attempt');
Route::delete('/centre/professional/delete','Centre\ProfessionalController@delete')->name('centre.professional.delete');

Route::post('/centre/professional/create','Centre\ProfessionalController@store');



Route::get('/professional','Professional\LoginController@login')->name('professional.login');
Route::get('/professional/index','Professional\LoginController@index')->name('professional.index');
Route::post('/professional/auth', 'Professional\LoginController@authenticate')->name('professional.authenticate');
Route::get('/professional/students','Professional\StudentController@index')->name('professional.student.index');
Route::post('/professional/students/search','Professional\StudentController@search')->name('professional.student.search');
Route::post('/professional/students/request','Professional\StudentController@req')->name('professional.student.request');




Auth::routes();

Route::post('/global/logout', 'LogoutController@logout')->name('global.logout');

Route::get('/home', 'HomeController@index')->name('home');

/*
* For Centre-end - Every Centre view routes goes here
*/
Route::group(['prefix' => 'centre', 'middleware' => 'centre_auth'], function(){
  Route::get('/', 'Centre\HomeController@index')->name('centre.index');
  Route::get('login', 'Centre\LoginController@index')->name('centre.login');
  Route::post('login', 'Centre\LoginController@authenticate')->name('centre.authenticate');

  Route::post('request/account', 'Centre\RequestController@account')->name('centre.request.account.send');

  Route::resource('student', 'Centre\StudentController', ['as' => 'centre']);

  // Tor routes goes here

});

Route::group(['prefix' => 'student'], function(){
  Route::get('login', 'Student\LoginController@index')->name('student.login');
  Route::post('login', 'Student\LoginController@authenticate')->name('student.authenticate');

  Route::get('/', 'Student\HomeController@index')->name('student.index');
});


//Student
Route::get('/student/iep', 'Student\RecordController@iep')->name('student.record.iep');
Route::get('/student/profile', 'Student\ProfileController@index')->name('student.profile');


Route::get('/professional/profile', function () {
    return view('professional.profile');
});
