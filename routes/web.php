<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\blogDetailsController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\shopDetailsController;
use App\Http\Controllers\shopGridController;
use App\Http\Controllers\shopingCartController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('index', indexController::class);
Route::resource('index', blogController::class);
Route::resource('index', blogDetailsController::class);
Route::resource('index', checkoutController::class);
Route::resource('index', contactController::class);
Route::resource('index', mainController::class);
Route::resource('index', shopDetailsController::class);
Route::resource('index', shopGridController::class);
Route::resource('index', shopingCartController::class);