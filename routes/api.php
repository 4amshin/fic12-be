<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ProductApiController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('productApi', ProductApiController::class);
});
