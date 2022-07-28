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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [App\Http\Controllers\Register::class, 'store']);
Route::post('/putin', [App\Http\Controllers\Putin::class, 'store']);
Route::post('/takeout/{id?}', [App\Http\Controllers\Remove::class, 'destroy']);
Route::get('/koli/common', [App\Http\Controllers\ListKoli::class, 'index']);
