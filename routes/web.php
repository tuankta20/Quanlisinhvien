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


route::prefix('student')->group(function (){
    route::get('/','StudentController@index')->name('student');
    route::post('/store','StudentController@store')->name('student.store');
    route::get('/create','StudentController@create')->name('student.create');
    route::get('edit/{id}','StudentController@edit')->name('student.edit');
    route::post('update/{id}','StudentController@update')->name('student.update');
    route::get('destroy/{id}','StudentController@destroy')->name('student.destroy');
});

route::prefix('class')->group(function (){
    route::get('/','ClassController@index')->name('class');
    route::post('/store','ClassController@store')->name('class.store');
    route::get('/create','ClassController@create')->name('class.create');
    route::get('edit/{id}','ClassController@edit')->name('class.edit');
    route::post('update/{id}','ClassController@update')->name('class.update');
    route::get('destroy/{id}','ClassController@destroy')->name('class.destroy');
});

route::prefix('course')->group(function (){
    route::get('/','CourseController@index')->name('course');
    route::post('/store','CourseController@store')->name('course.store');
    route::get('/create','CourseController@create')->name('course.create');
    route::get('edit/{id}','CourseController@edit')->name('course.edit');
    route::post('update/{id}','CourseController@update')->name('course.update');
    route::get('destroy/{id}','CourseController@destroy')->name('course.destroy');
});
route::prefix('subject')->group(function (){
    route::get('/','SubjectController@index')->name('subject');
    route::post('/store','SubjectController@store')->name('subject.store');
    route::get('/create','SubjectController@create')->name('subject.create');
    route::get('edit/{id}','SubjectController@edit')->name('subject.edit');
    route::post('update/{id}','SubjectController@update')->name('subject.update');
    route::get('destroy/{id}','SubjectController@destroy')->name('subject.destroy');
});

route::prefix('score')->group(function (){
    route::get('/','ScoreController@index')->name('score');
    route::post('/store','ScoreController@store')->name('score.store');
    route::get('/create','ScoreController@create')->name('score.create');
    route::get('edit/{id}','ScoreController@edit')->name('score.edit');
    route::post('update/{id}','ScoreController@update')->name('score.update');
    route::get('destroy/{id}','ScoreController@destroy')->name('score.destroy');
});
route::prefix('teacher')->group(function (){
    route::get('/','TeacherController@index')->name('teacher');
    route::post('/store','TeacherController@store')->name('teacher.store');
    route::get('/create','TeacherController@create')->name('teacher.create');
    route::get('edit/{id}','TeacherController@edit')->name('teacher.edit');
    route::post('update/{id}','TeacherController@update')->name('teacher.update');
    route::get('destroy/{id}','TeacherController@destroy')->name('teacher.destroy');
});
