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
<<<<<<< HEAD
    return view('index-page');
});
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');
Route::get('admin','Auth\LoginController@showLoginForm')->name('admin');
Route::post('admin','Auth\LoginController@login');
Route::get('studentregister', 'Student\RegisterController@showRegistrationForm')->name('studentregister');
Route::post('studentregister', 'Student\RegisterController@register');
Route::get('studentlogin','Student\LoginController@showLoginForm')->name('studentlogin');
Route::post('studentlogin','Student\LoginController@login');
Auth::routes();

Route::get('/adminhome', 'HomeController@index')->name('home');
Route::get('/studenthome', 'StudentController@index')->name('home');
Route::resource('/courses', 'CourseController');
Route::get('/addfile', 'CourseController@showAddFile');
Route::post('/addfile', 'CourseController@add_file');
Route::get('/downloadfile/{file_name}', 'CourseController@download');
Route::get('deletefile/{id}', 'CourseController@delete_file');
=======

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
>>>>>>> df43f438f381d0c6c1c4cbb422486d61fe426d27
