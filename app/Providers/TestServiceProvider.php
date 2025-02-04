<?php

namespace App\Providers;
use App\Services\DemoOne;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
            $this->app->bind('App\Services\DemoOne',function ($app){
           return new DemoOne();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
