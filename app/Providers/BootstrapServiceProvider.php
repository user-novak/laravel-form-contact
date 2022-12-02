<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([base_path('vendor/twbs/bootstrap/dist') => public_path('vendor/bootstrap')], 'public');
        $this->publishes([base_path('vendor/twbs/bootstrap-icons/font') => public_path('vendor/bootstrap/icons')], 'public');
    }
}
