<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/addcar',[CarController::class,'index']);
Route::post('/addcar',[CarController::class,'tambahmobil']);
Route::get('/editmobil/{id}',[CarController::class,'editmobil']);
Route::post('/editmobil',[CarController::class,'edit']);
Route::get('/deletee/{id}',[CarController::class,'delete']);