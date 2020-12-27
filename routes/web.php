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
    return view('home');
})->name('home');

Route::prefix('/products')->name('products')->group(function (){
    Route::get('/', [\App\Http\Controllers\Web\ProductController::class, 'index'])->name('.index');
    Route::get('/add', [\App\Http\Controllers\Web\ProductController::class, 'add'])->name('.add');
    Route::post('/', [\App\Http\Controllers\Web\ProductController::class, 'store'])->name('.store');
    Route::get('/{product}/edit', [\App\Http\Controllers\Web\ProductController::class, 'edit'])->name('.edit');
    Route::delete('/{product}/delete', [\App\Http\Controllers\Web\ProductController::class, 'delete'])->name('.delete');
    Route::put('/{product}', [\App\Http\Controllers\Web\ProductController::class, 'update'])->name('.update');
    Route::get('/{product}', [\App\Http\Controllers\Web\ProductController::class, 'profile'])->name('.profile');
});
Route::get('/profile', 'UserController@profile');
Route::get('/register', 'UserController@registerView')->name('register-view');
Route::post('/register', 'UserController@register')->name('register');
Route::get('/login', 'UserController@loginView')->name('login-view');
Route::post('/login', 'UserController@login')->name('login');

Route::get('/call', 'Api\AuthController@call');
Route::get('/callback', 'Api\AuthController@callback');
