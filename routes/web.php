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

//Route::get('tasks','TasksController@index'); ada method/fnction index dalma taskscontroller

//Route::post('tasks','TasksController@store'); ""

//Route:: controller('tasks','TasksController');

//Route::resources('tasks','TasksController');

Route::resource('/tasks','TasksController');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

