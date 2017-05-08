<?php

namespace Emile442\AdminLite;

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
        // Views publish
        $this->loadViewsFrom(__DIR__.'/views', 'adminlite');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/emile442/adminlite'),
        ]);

        // Assets publish
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/adminlite'),
        ], 'adminlite');

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
