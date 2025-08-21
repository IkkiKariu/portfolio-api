<?php

namespace App\Services;

use App\Models\User;

class RegistrationService implements IRegistrationService
{
    public function register(array $credentials): User
    {
        return User::create($credentials);
    }
}