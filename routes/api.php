<?php

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

Route::post('/login', 'LoginController@login');
Route::resource('/products', 'ProductController')->only(['index', 'show']);
Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('/orders', 'OrderController')->only(['index', 'store', 'show']);
});
