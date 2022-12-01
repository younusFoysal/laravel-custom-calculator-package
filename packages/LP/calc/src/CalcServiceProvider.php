<?php

namespace LP\Calc;

use Illuminate\Support\ServiceProvider;

class CalcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('LP\Calc\CalcController');
        $this->loadViewsFrom(__DIR__.'/views', 'calc');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
