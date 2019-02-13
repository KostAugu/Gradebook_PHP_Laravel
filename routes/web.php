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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students', 'StudentController@index');
Route::get('/lectures', 'LectureController@index');
Route::get('/students/create', 'StudentController@create');
Route::get('/lectures/create', 'LectureController@create');
Route::post('/students', 'StudentController@store');
Route::post('/lectures', 'LectureController@store');

Route::group(['middleware' => 'admin'], function () {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');    
});

