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

Route::get('/profile', 'UserController@profile');
Route::get('/register', 'UserController@registerView')->name('register-view');
Route::post('/register', 'UserController@register')->name('register');
Route::get('/login', 'UserController@loginView')->name('login-view');
Route::post('/login', 'UserController@login')->name('login');

Route::get('/call', 'Api\AuthController@call');
Route::get('/callback', 'Api\AuthController@callback');
