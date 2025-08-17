<?php

namespace App\Services;

use App\Models\User;

interface IApiTokenAuthService
{
    function authenticate(array $credentials): ?User;
    function issueToken(User $user): string;
}