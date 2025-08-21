<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

use App\Models\PersonalAccessToken;
use App\Services\ApiTokenAuthService;
use App\Services\RegistrationService;
use App\Services\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ApiTokenAuthService::class, function () {
            return new ApiTokenAuthService;
        });
        $this->app->bind(RegistrationService::class, function () {
            return new RegistrationService;
        });
        $this->app->bind(UserService::class, function () {
            return new UserService;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
