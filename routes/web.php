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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/','Home@index');

//Login route
Auth::routes();
Route::any('/login','Auth\LoginController@login');

Route::any('/postDetails/{id}','PostController@postDetails');
// Route::get('/home', 'HomeController@index')->name('home');
