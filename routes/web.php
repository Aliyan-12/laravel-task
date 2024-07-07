<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'user'], function() {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginPost'])->name('user.login');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'registerPost'])->name('user.register');
});

Route::post('/logout', [\App\Http\Controllers\AuthController::class,'logout'])->name('user.logout');

Route::prefix('admin')->middleware(['auth', 'role:admin|agent'])->group(function() {
    Route::get('/dashboard', [\App\Http\Controllers\AuthController::class, 'dashboard'])->name('admin.dashboard');
});