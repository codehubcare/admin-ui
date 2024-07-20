<?php

namespace Codehubcare\AdminUi;

use Illuminate\Support\ServiceProvider;

class AdminUiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
    }
}
