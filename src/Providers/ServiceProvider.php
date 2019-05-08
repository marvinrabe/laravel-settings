<?php

namespace MarvinRabe\LaravelSettings\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MarvinRabe\LaravelSettings\Setting;

class ServiceProvider extends BaseServiceProvider
{

    public function boot()
    {
        $baseDir = __DIR__ . '/../..';

        $this->publishes([
            $baseDir . '/config/settings.php' => config_path('settings.php'),
            $baseDir . '/migrations' => database_path('migrations')
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Setting::class, Setting::class);
        $this->app->alias(Setting::class, 'setting');
        $this->app->alias(Setting::class, 'settings');
    }
}
