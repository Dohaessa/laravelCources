<?php

use Illuminate\Support\Facades\Route;

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

Route::get('courses', 'CourseController@index');
Route::get('courses/{id}', 'CourseController@show')->name('courses.show');

Route::get('/create', 'CourseController@create');
Route::get('/store', 'CourseController@store');

