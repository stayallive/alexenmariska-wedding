<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Model::unguard();

        RateLimiter::for('signin', static fn (Request $request) => Limit::perMinutes(5, 60)->by($request->ip()));
    }
}
