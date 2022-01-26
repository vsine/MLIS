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
Route::get('',function (){
    return view('welcome');
});
Route::prefix('admin')->group(function (){
    Route::get('',function (){
        return view('admin.indrx');
    })->name('admin.index');
    Route::fallback(function (){
        return redirect('');
    });
});

Route::get('login',[]);


Route::fallback(function (){
    return redirect('');
});

