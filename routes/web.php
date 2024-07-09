<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('user')->middleware(['guest'])->group(function() {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginPost'])->name('user.login');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'registerPost'])->name('user.register');
});

Route::post('/logout', [\App\Http\Controllers\AuthController::class,'logout'])->name('user.logout');

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/dashboard', [\App\Http\Controllers\AuthController::class, 'dashboard'])->withoutMiddleware('role:admin')->name('admin.dashboard');
    
    // Users
    Route::group(['prefix' => 'user'], function() {
        Route::get('/view', [\App\Http\Controllers\UserController::class, 'index'])->withoutMiddleware('role:admin')->name('user.view');
        Route::get('/add', [\App\Http\Controllers\UserController::class, 'create'])->name('user.add');
        Route::post('/store', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
    });

    // Provinces
    Route::group(['prefix' => 'province'], function() {
        Route::get('/view', [\App\Http\Controllers\ProvinceController::class, 'index'])->withoutMiddleware('role:admin')->name('province.view');
        Route::get('/add', [\App\Http\Controllers\ProvinceController::class, 'create'])->name('province.add');
        Route::post('/store', [\App\Http\Controllers\ProvinceController::class, 'store'])->name('province.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\ProvinceController::class, 'edit'])->name('province.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\ProvinceController::class, 'update'])->name('province.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\ProvinceController::class, 'destroy'])->name('province.delete');
    });

    // Divisions
    Route::group(['prefix' => 'division'], function() {
        Route::get('/view', [\App\Http\Controllers\DivisionController::class, 'index'])->withoutMiddleware('role:admin')->name('division.view');
        Route::get('/add', [\App\Http\Controllers\DivisionController::class, 'create'])->name('division.add');
        Route::post('/store', [\App\Http\Controllers\DivisionController::class, 'store'])->name('division.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\DivisionController::class, 'edit'])->name('division.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\DivisionController::class, 'update'])->name('division.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\DivisionController::class, 'destroy'])->name('division.delete');
        Route::get('/load', [\App\Http\Controllers\DivisionController::class, 'load'])->name('division.load');
    });

    // Districts
    Route::group(['prefix' => 'district'], function() {
        Route::get('/view', [\App\Http\Controllers\DistrictController::class, 'index'])->withoutMiddleware('role:admin')->name('district.view');
        Route::get('/add', [\App\Http\Controllers\DistrictController::class, 'create'])->name('district.add');
        Route::post('/store', [\App\Http\Controllers\DistrictController::class, 'store'])->name('district.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\DistrictController::class, 'edit'])->name('district.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\DistrictController::class, 'update'])->name('district.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\DistrictController::class, 'destroy'])->name('district.delete');
        Route::get('/load', [\App\Http\Controllers\DistrictController::class, 'load'])->name('district.load');
    });

    // Tehsils
    Route::group(['prefix' => 'tehsil'], function() {
        Route::get('/view', [\App\Http\Controllers\TehsilController::class, 'index'])->withoutMiddleware('role:admin')->name('tehsil.view');
        Route::get('/add', [\App\Http\Controllers\TehsilController::class, 'create'])->name('tehsil.add');
        Route::post('/store', [\App\Http\Controllers\TehsilController::class, 'store'])->name('tehsil.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\TehsilController::class, 'edit'])->name('tehsil.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\TehsilController::class, 'update'])->name('tehsil.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\TehsilController::class, 'destroy'])->name('tehsil.delete');
        Route::get('/load', [\App\Http\Controllers\TehsilController::class, 'load'])->name('tehsil.load');
    });

    // UnionCouncils
    Route::group(['prefix' => 'union-council'], function() {
        Route::get('/view', [\App\Http\Controllers\UCController::class, 'index'])->withoutMiddleware('role:admin')->name('union-council.view');
        Route::get('/add', [\App\Http\Controllers\UCController::class, 'create'])->name('union-council.add');
        Route::post('/store', [\App\Http\Controllers\UCController::class, 'store'])->name('union-council.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\UCController::class, 'edit'])->name('union-council.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\UCController::class, 'update'])->name('union-council.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\UCController::class, 'destroy'])->name('union-council.delete');
        Route::get('/load', [\App\Http\Controllers\UCController::class, 'load'])->name('union-council.load');
    });

    // Houses
    Route::group(['prefix' => 'house'], function() {
        Route::get('/view', [\App\Http\Controllers\HouseController::class, 'index'])->withoutMiddleware('role:admin')->name('house.view');
        Route::get('/add', [\App\Http\Controllers\HouseController::class, 'create'])->name('house.add');
        Route::post('/store', [\App\Http\Controllers\HouseController::class, 'store'])->name('house.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\HouseController::class, 'edit'])->name('house.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\HouseController::class, 'update'])->name('house.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\HouseController::class, 'destroy'])->name('house.delete');
        Route::get('/load', [\App\Http\Controllers\HouseController::class, 'load'])->name('house.load');
    });

    // Members
    Route::group(['prefix' => 'member'], function() {
        Route::get('/view', [\App\Http\Controllers\MemberController::class, 'index'])->withoutMiddleware('role:admin')->name('member.view');
        Route::get('/add', [\App\Http\Controllers\MemberController::class, 'create'])->name('member.add');
        Route::post('/store', [\App\Http\Controllers\MemberController::class, 'store'])->name('member.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\MemberController::class, 'edit'])->name('member.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\MemberController::class, 'update'])->name('member.update');
        Route::post('/delete/{id}', [\App\Http\Controllers\MemberController::class, 'destroy'])->name('member.delete');
        Route::get('/load', [\App\Http\Controllers\MemberController::class, 'load'])->name('member.load');
    });
});