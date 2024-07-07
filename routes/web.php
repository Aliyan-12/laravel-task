<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'user'], function() {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('user.login');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('user.register');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginPost'])->name('user.login');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'registerPost'])->name('user.register');
});

Route::group(['prefix' => 'admin', 'role' => 'admin'], function() {
    
});