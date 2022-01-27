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
//Route::prefix("admin")->middleware("check")->group(function (){
//    Route::get("task/{id}",[\App\Http\Controllers\TaskController::Class,"read"]);
//});
//主页
Route::get('',function (){
    return view('welcome');
});
//登录
Route::get('login',[\App\Http\Controllers\LoginController::class,
    'login_page'])->name("index.login");
Route::fallback(function (){
    return redirect('');
});
Route::post('login/verify',[\App\Http\Controllers\LoginController::class,'login_verify']);



Route::prefix('admin')->middleware('check')->group(function (){
    Route::get('',function (){
        return view('admin.indrx');
    })->name('admin.index');
    Route::fallback(function (){
        return redirect('');
    });
});



