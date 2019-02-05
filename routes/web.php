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


Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware('auth');

Route::get('login','loginController@showLoginPage')->name('login')->middleware('guest'); 
// Set middleware with login page for not accessing to it if user is alreadly loged in

Route::post('login','loginController@login');

Route::get('logout','loginController@logout')->name('logout');
//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
