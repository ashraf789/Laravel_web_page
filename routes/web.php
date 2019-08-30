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

Route::any('/','Home@index')->name('home');

Auth::routes();

//Login route
Route::get('userLogin', function(){
return view('auth/login');
})->name('userLogin');
Route::POST('userLogin','Auth\LoginController@authenticate')->name('userLogin');

Route::any('logout','Auth\LogoutController@logout')->name('logout');
Route::GET('signUp',function(){
    return view('auth/register');
})->name('userRegistration');

Route::POST('signUp','Auth\RegisterController@createUser')->name('userRegistration');

Route::any('/postDetails/{id}','PostController@postDetails');
// Route::get('/home', 'HomeController@index')->name('home');

// Dashboard route
Route::any('dashboard','DashboardController@blogPost')->name('dashboard');
// Dashboard route
Route::any('dashboard/post/edit/{id}','DashboardController@postEdit')->name('postEdit');

// blog post controller
Route::any('dashboard/post/update/{id}','PostUpdateController@updatePost')->name('postUpdate');


Route::get('test',function(){
    return view('welcome');
})->name('test');
