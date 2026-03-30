<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;

Route::post('/user/create', [UserController::class, 'createUser']); 
Route::get('/users', [UserController::class, 'getUsers']);

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
