<?php

use Illuminate\Http\Request;

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

Route::post('jwt/login', 'AuthController@login');
Route::post('jwt/refresh-token', 'AuthController@refresh_token');

Route::get('test', 'TestController@index');