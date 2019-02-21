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
Route::get('/task','taskController@index')->name('task.index');
Route::get('/task/create','taskController@create')->name('task.create');
Route::post('/task','taskController@store')->name('task.store');