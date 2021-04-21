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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::resource('/d111811137_admin', d111811137_adminController::class);
Route::resource('/d111811137_news', d111811137_newsController::class);

Route::resource('/d111811132_admin', d111811132_adminController::class);
Route::resource('/d111811132_news', d111811132_newsController::class);

