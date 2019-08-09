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
// ->middleware('auth:web');

Route::get('/studenthome', 'StudentsController@index')->name('home');
// ->middleware('auth:student');

Route::resource('/courses', 'CourseController');
// ->middleware('auth:web');

Route::get('/addfile', 'CourseController@showAddFile');
// ->middleware('auth:web');

Route::post('/addfile', 'CourseController@add_file')->name('addfile');
// ->middleware('auth:web');

Route::get('/downloadfile/{file_name}', 'CourseController@download');

Route::get('deletefile/{id}', 'CourseController@delete_file');
// ->middleware('auth:web');

Route::get('see_more', 'CourseController@filesSeeMore');

// =======

//

//     return view('index-page');

// });



//start student route

Route::get('student/add','StudentsController@add');
// ->middleware('auth:web');

Route::post('student/save','StudentsController@add');
// ->middleware('auth:web');

Route::get('student/show','StudentsController@showAll');
// ->middleware('auth:web');

Route::get('student/edit/{id}','StudentsController@edit');
// ->middleware('auth:web');

Route::post('student/edit/{id}','StudentsController@edit');
// ->middleware('auth:web');

Route::get('student/delete/{id}','StudentsController@delete');
// ->middleware('auth:web');

Route::post('student/edit/state/{id}','StudentsController@changeState');
// ->middleware('auth:web');

//end student route
//Start Quiz route
Route::get('exam/add','QuizController@add');
Route::post('exam/save','QuizController@add');
Route::get('exam/show','QuizController@showAll');
Route::get('exam/delete/{is_mcq}/{quiz_number}/{stage}/{is_excellent}/{is_adaby}','QuizController@delete');
Route::get('exam/edit/{is_mcq}/{quiz_number}/{stage}/{is_excellent}/{is_adaby}','QuizController@edit'); 
Route::post('exam/edit','QuizController@edit'); 
//end quiz route

