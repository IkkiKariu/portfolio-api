<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiTokenAuthController;
use App\Http\Controllers\RegistrationController;

Route::post('/token-auth', [ApiTokenAuthController::class, 'auth'])->name('token-auth');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

// This route required by sanctum API token auth
Route::post('/login', function () {

});
