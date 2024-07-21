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
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/adminui'),
        ]);

        // Publish controllers
        $this->publishes([
            __DIR__ . '/Http/Controllers' => base_path('app/Http/Controllers'),
        ]);

        // Publish assets
        $this->publishes([
            __DIR__ . '/public/' => public_path('vendor/adminui'),
            __DIR__ . '/../node_modules/tinymce/models/' => public_path('vendor/adminui/models'),
            __DIR__ . '/../node_modules/tinymce/icons/' => public_path('vendor/adminui/icons'),
            __DIR__ . '/../node_modules/tinymce/skins/' => public_path('vendor/adminui/skins'),
            __DIR__ . '/../node_modules/tinymce/plugins/' => public_path('vendor/adminui/plugins'),
            __DIR__ . '/../node_modules/tinymce/themes/' => public_path('vendor/adminui/themes'),
        ], 'public');
    }

    public function register()
    {
    }
}
