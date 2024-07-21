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
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'adminui');

        // Publish controllers
        $this->publishes([
            __DIR__ . '/Http/Controllers' => base_path('app/Http/Controllers'),
        ]);

        // Publish assets
        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/adminui'),
        ], 'public');
    }

    public function register()
    {
    }
}
