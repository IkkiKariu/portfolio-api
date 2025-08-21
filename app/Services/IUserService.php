<?php

namespace App\Services;

use App\Models\PersonalInfo;
use App\Models\User;

interface IUserService
{
    function update(string $id, array $personalInfo);
    // function get(): User;
    // function delete(): void;
}