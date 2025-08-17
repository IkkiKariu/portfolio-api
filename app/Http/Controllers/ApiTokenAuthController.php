<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiTokenAuthenticationRequest;
use App\Services\ApiTokenAuthService;
use Illuminate\Http\Request;

class ApiTokenAuthController extends Controller
{
    private ApiTokenAuthService $authService;
    
    public function __construct(ApiTokenAuthService $authService)
    {
        $this->authService = $authService;
    }

    public function auth(ApiTokenAuthenticationRequest $request)
    {
        $user = $this->authService->authenticate($request->validated());

        // If provided credentials are invalid
        if (!$user) return response()->json(status: 401);

        $token = $this->authService->issueToken(user: $user);

        return response()->json(status: 200, data: ['data' => ['personal_access_token' => $token]]);
    }
}
