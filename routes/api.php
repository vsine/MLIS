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
//api路由前缀api
Route::middleware('check')->get('user', function () {
    return view('welcome');
});

Route::get('login',[\App\Http\Controllers\LoginController::class,'login_api']);
