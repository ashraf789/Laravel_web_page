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

Auth::routes();

//Login route
Route::get('login2', function(){
return view('auth/login');
});
Route::POST('login2','Auth\LoginController@user_login')->name('test'); 

Route::GET('signUp',function(){
    return view('auth/register');
});
Route::POST('signUp','Auth\RegisterController@createUser');

Route::any('/postDetails/{id}','PostController@postDetails');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('test',function(){
    return view('welcome');
});
