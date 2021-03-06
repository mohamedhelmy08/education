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
     // dd(Auth::guard());
    return view('home-student');

});

// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

// Route::post('register', 'Auth\RegisterController@register');
Auth::routes();
Route::get('admin','Auth\LoginController@showLoginForm')->name('admin');

Route::post('admin','Auth\LoginController@login');

Route::get('studentregister', 'Student\RegisterController@showRegistrationForm')->name('studentregister');

Route::post('studentregister', 'Student\RegisterController@register');

Route::get('studentlogin','Student\LoginController@showLoginForm')->name('studentlogin');

Route::post('studentlogin','Student\LoginController@login');

Route::middleware('auth:web')->get('adminprofile','ProfileController@view_admin');
Route::middleware('auth:web')->post('editadminprofile/{id}','ProfileController@profile_admin_edit');
Route::middleware('auth:web')->post('update_admin_password','ProfileController@change_admin_password');
Route::get('/adminhome', 'HomeController@index')->name('home')->middleware('auth:web');
Route::middleware('auth:student')->get('/studenthome', 'StudentsController@index')->name('home');
Route::resource('/courses', 'CourseController')->middleware('auth:web');
Route::get('/addfile', 'CourseController@showAddFile')->middleware('auth:web');
Route::post('/addfile', 'CourseController@add_file')->name('addfile')->middleware('auth:web');
Route::get('/downloadfile/{file_name}', 'CourseController@download');
Route::get('deletefile/{id}', 'CourseController@delete_file')->middleware('auth:web');
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
Route::middleware('auth:student')->get('student/exams','StudentsController@showStudentExams');
Route::middleware('auth:student')->get('student/takeexam/{q_num}/{mcq}','StudentsController@takeExam');
Route::middleware('auth:student')->post('student/submitnotexam','StudentsController@submitNoteExam');
Route::middleware('auth:student')->post('student/submitmcqexam','StudentsController@submitMcqExam');
Route::middleware('auth:student')->get('student/examresult/{q_num}/{is_examed}','StudentsController@getExamResult');
Route::middleware('auth:student')->get('student/profile','ProfileController@index');
Route::middleware('auth:student')->post('student/editprofile/{id}','ProfileController@student_profile_edit');
Route::middleware('auth:student')->post('student/update_student_password','ProfileController@change_student_password');
//end student route
//Start Quiz route
Route::get('exam/add','QuizController@add');
Route::post('exam/save','QuizController@add');
Route::get('exam/show','QuizController@showAll');
Route::get('exam/delete/{is_mcq}/{quiz_number}/{stage}/{is_excellent}/{is_adaby}','QuizController@delete');
Route::get('exam/edit/{is_mcq}/{quiz_number}/{stage}/{is_excellent}/{is_adaby}','QuizController@edit');
Route::post('exam/edit','QuizController@edit');
//end quiz route
