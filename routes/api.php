<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', function () {
    return "working...";
});
Route::get('/countries', 'Api\CountryController@countries');
Route::get('/countries/{country}/states', 'Api\CountryController@states');

Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');
Route::middleware('auth:api')->prefix('/')->group(function (){
    Route::get('/profile', 'Api\AuthController@profile');
    Route::post('/logout', 'Api\AuthController@logout');
});

Route::middleware('auth:api')->prefix('/products')->group(function (){
    Route::get('/online-store', 'Api\ProductController@onlineStore');
    Route::get('/pre-order-store', 'Api\ProductController@preOrderStore');
    Route::get('/{id}', 'Api\ProductController@profile');
    Route::post('/', 'Api\ProductController@store');
});
Route::middleware('auth:api')->prefix('/trips')->group(function () {
    Route::post('/', 'Api\TripController@store');
});
Route::get('/shipment/fit/types', 'Api\ProductController@shipmentFits');
