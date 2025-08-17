<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Requests\ApiTokenAuthenticationRequest;
use App\Http\Controllers\ApiTokenAuthController;

Route::post('/token-auth', [ApiTokenAuthController::class, 'auth']);

// This route required by sanctum API token auth
Route::post('/login', function () {

});