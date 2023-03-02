<?php

namespace FilippoToso\AfiEsca;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('afiesca', function () {
            return new AfiEsca(config('afiesca.login'), config('afiesca.password'));
        });
    }
}
