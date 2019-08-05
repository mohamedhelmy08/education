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

    return view('index-page');
});

//start student route
Route::get('student/add','StudentsController@add');
Route::post('student/save','StudentsController@add');
Route::get('student/show','StudentsController@showAll');
Route::get('student/edit/{id}','StudentsController@edit');
Route::post('student/edit/{id}','StudentsController@edit');
Route::get('student/delete/{id}','StudentsController@delete');
Route::post('student/edit/state/{id}','StudentsController@changeState');
//end student route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
