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

Route::resource('/courses', 'CourseController');
Route::get('/courses/{course}/delete', 'CourseController@delete');

Route::resource('/groups', 'GroupController');
Route::get('/groups/{group}/delete', 'GroupController@delete');

Route::resource('/groups/{group}/lectures', 'LectureController');

//Route::get('/groups/{group}/lectures', 'LectureController@index');
//Route::get('/groups/{group}/lectures/create', 'LectureController@create');
//Route::post('/groups/{group}/lectures', 'LectureController@store');
//Route::get('/groups/{group}/lectures/{lecture}/edit', 'LectureController@edit');
//Route::put('/groups/{group}/lectures/{lecture}', 'LectureController@update');
Route::get('/groups/{group}/lectures/{lecture}/delete', 'LectureController@delete');
//Route::delete('/groups/{group}/lectures/{lecture}', 'LectureController@destroy');