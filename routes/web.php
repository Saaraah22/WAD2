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

Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('/AddStudent','HomeController@AddStudent');
Route::get('/FinishLog','HomeController@FinishLog');
Route::post('StudentRegistered','HomeController@StudentRegistered');
Route::get('/show','HomeController@show');
Route::get('/edit/{id}', 'HomeController@editStudent');
Route::post('/saveEdit', 'HomeController@saveEdit');
Route::get('/view/{id}','HomeController@view');
Route::get('/delete/{id}', 'HomeController@toDelete');

Route::get('student', function () {
    return view ('student');
	})->middleware('role:student');

/*Route::group(['middleware' => ['auth','student']], function(){
	return view('Student');
});

Route::group(['middleware' => ['auth','teacher']], function(){
	//
});*/
