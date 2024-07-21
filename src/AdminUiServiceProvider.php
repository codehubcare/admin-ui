<?php

namespace Codehubcare\AdminUi;

use Illuminate\Support\ServiceProvider;

class AdminUiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/views', 'adminui');

        // Publish controllers
        $this->publishes([
            __DIR__ . '/Http/Controllers' => base_path('app/Http/Controllers'),
        ]);
    }

    public function register()
    {
    }
}
