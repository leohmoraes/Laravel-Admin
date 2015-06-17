<?php

namespace RLStudio\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('admin.php'),
        ]);

        $this->

        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php', 'admin'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('admin', function ($app) {
            return new Admin($app);
        });
    }
}
