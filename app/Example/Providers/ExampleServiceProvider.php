<?php

namespace OnPegasus\Example\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'example');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
