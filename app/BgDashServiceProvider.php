<?php

namespace BgDash;

use Illuminate\Support\ServiceProvider;

/**
 * Class BgDashServiceProvider.
 *
 * @package BgDash
 */
class BgDashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

//        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bg-dash');

        $this->publishes([
            __DIR__ . '/../config/bg-dash.php' => config_path('bg-dash.php'),
        ], 'bg-dash');
    }
}
