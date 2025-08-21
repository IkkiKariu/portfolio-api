<?php

namespace App\Services;

use App\Models\User;

interface IRegistrationService
{
    function register(array $credentials): User;
}