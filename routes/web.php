<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*----------------------------------------NON AUTH--------------------------------------*/
Route::get('/', function () {
    return view('auth.login');
});


/*----------------------------------------AUTH ROUTE--------------------------------------*/
Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/home', function() {
        return view('home');
    })->name('home');

    Route::get('/profile', function() {
        return view('auth.profile');
    })->name('profile');

    /*----------------------------------------USER--------------------------------------*/
    Route::resource('user', UserController::class);


    /*----------------------------------------Product--------------------------------------*/
    Route::resource('product', ProductController::class);


    /*----------------------------------------Order--------------------------------------*/
    Route::resource('order', OrderController::class);
});
