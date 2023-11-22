<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\frontend\indexController;
use \App\Http\Controllers\SettingProController;
use \App\Http\Controllers\frontend\attendanceController;

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

Route::get('/index', [indexController::class,'index'])->name("index");
Route::get('/view_404', [SettingProController::class,'view_404'])->name("view_404");
Route::get('/view_500', [SettingProController::class,'view_500'])->name("view_500");
Route::get('/view_409', [SettingProController::class,'view_409'])->name("view_409");

Route::group(['middleware' => 'check.comed.portal'], function () {
    Route::get('/index', [indexController::class,'index'])->name("index");
    Route::get('/attendance', [attendanceController::class,'index'])->name("attendance");
    Route::get('/attendance-details/{empno}', [attendanceController::class,'getDetails'])->name("attendance-details");

});
