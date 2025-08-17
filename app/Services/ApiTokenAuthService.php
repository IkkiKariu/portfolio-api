<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class ApiTokenAuthService implements IApiTokenAuthService
{
    public function authenticate(array $credentials): ?User
    {
        $user = User::where('email', '=', $credentials['email'])->first();
        if (!$user) return null;
        if (!Hash::check($credentials['password'], $user->password)) return null;

        return $user;
    }

    public function issueToken(User $user): string
    {
        return $user->createToken('auth_token', ['*'], now()->addDays(3))->plainTextToken;
    }
}