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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/exams', 'App\Http\Controllers\ExamsController@index')->name("exams.index");
Route::get('/exams/{id}', 'App\Http\Controllers\ExamsController@show')->name("exams.show");
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/exams', 'App\Http\Controllers\Admin\AdminExamController@index')->name("admin.exam.index");