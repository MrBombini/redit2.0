<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function boot(): void
    {
        parent::boot();
    }

    public function mapWebRoutes(){
        Route::middleware('web')->namespace($this->namespace)->group(base_path('routes/web.php'));
    }

    public function map(){
        $this->mapWebRoutes();
        $this->mapApiRoutes();
    }

    public function mapApiRoutes(){
        Route::prefix('api')->middleware('api')->namespace($this->namespace)->group(base_path('routes/api.php'));
    }
}
