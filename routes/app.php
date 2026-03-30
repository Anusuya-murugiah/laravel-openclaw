<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/users', [UserController::class, 'createUser']);
    Route::get('/users', [UserController::class, 'getUsers']);
});
