<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\RegistrationService;
use App\Services\UserService;
use App\Http\Resources\RegisteredUserResource;

class RegistrationController extends Controller
{
    private RegistrationService $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    public function store(RegistrationRequest $request): RegisteredUserResource
    {
        $payload = $request->validated();
        $user = $this->registrationService->register(credentials: $payload['credentials']);

        return RegisteredUserResource::make($user);
    }
}
