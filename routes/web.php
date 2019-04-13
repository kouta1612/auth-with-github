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

Route::get('/dashboard', function() {
    return 'You are logged in user!';
})->middleware('auth');

Route::get('/login/github', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});
