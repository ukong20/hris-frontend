<?php

use App\Http\Middleware\ApiAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test\TestController;

Route::namespace('App\Http\Controllers\web')->group(function () {
    Route::controller('LoginController')->group(function() {
        Route::get('/','show')->name('login');
        Route::post('/','submit')->name('login.submit');
    });
});

Route::middleware('auth.api')->group(function () {
    Route::get('/test', [TestController::class, 'index'])
        ->name('test.index');
});

// Route::get('/', function () {
//     return view('welcome');
// });
