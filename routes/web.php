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

Route::get('/', 'HomeController@index');

Route::get('/', 'UserController@index');

Route::get('user/creat', 'UserController@creat');

Route::get('user/store', 'UserController@age');

Route::get('user/edit/{id}', 'UserController@edit');

Route::get('user/update/{id}', 'UserController@update');

Route::get('user/drelete/{id}', 'UserController@delete');
