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

Route::any('/', 'Home@index')->name('home');

Auth::routes();

//Login route
Route::get('userLogin', function () {
    return view('auth/login');
})->name('userLogin')->name('userLogin');
Route::POST('userLogin', 'Auth\LoginController@authenticate')->name('userLogin');

Route::any('logout', 'Auth\LogoutController@logout')->name('logout');
Route::GET('signUp', function () {
    return view('auth/register');
})->name('userRegistration');

Route::POST('signUp', 'Auth\RegisterController@createUser')->name('userRegistration');

Route::any('/postDetails/{id}', 'PostController@postDetails');
// Route::get('/home', 'HomeController@index')->name('home');

// Dashboard route
Route::any('dashboard', 'DashboardController@blogPost')->name('dashboard');
// Dashboard route
Route::get('dashboard/post/add', 'DashboardController@postAdd')->name('postAdd');
Route::get('dashboard/post/edit/{id}', 'DashboardController@postEdit')->name('postEdit');
// blog post controller
Route::post('dashboard/post/submit', 'PostController@submitPost')->name('postSubmit');
Route::any('dashboard/post/update/{id}', 'PostController@updatePost')->name('postUpdate');
Route::any('dashboard/post/delete/{id}', 'PostController@postDelete')->name('postDelete');

// contact page
Route::get('/contact', 'ContactController@contactView')->name('contact');
Route::post('/contact', 'ContactController@saveUserRequest')->name('contact');

Route::get('test', function () {
    return view('welcome');
})->name('test');
