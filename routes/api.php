<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\UserController;
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


Route::apiResource('users', \UserController::class);

// Route::apiResource('compras', \ComprasController::class)->middleware('auth:api');
Route::post('compras', 'ComprasArticulosController@store')->middleware('auth:api');
Route::apiResource('articulos', \ArticulosController::class)->middleware('auth:api');
// Route::post('articulos', 'ArticulosController@store');#->middleware('auth:api');;

Route::post('register', 'API\AuthController@register');
Route::post('login', 'API\AuthController@login');
