<?php

namespace Ecommerce\Auth;

use Illuminate\Support\ServiceProvider;

class AuthModularServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */         
    public function boot()
    {
        
        include __DIR__.'/routes.php';

        //$this->loadViewsFrom(__DIR__.'/views', 'auth');

        $this->app->make('Ecommerce\Auth\AuthController');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views'),
            __DIR__.'/seed' => base_path('database/seeds')
        ]);
        
        $this->loadMigrationsFrom(__DIR__.'/migration');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
