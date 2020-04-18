<?php
namespace {{Name}}\{{Package}};

use Illuminate\Support\ServiceProvider;

class {{Package}}ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', '{{package}}');

        if (! $this->app->routesAreCached()) {
            $this->loadRoutesFrom(__DIR__.'/{{Package}}_Routers.php');
        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('{{Name}}\{{Package}}\{{Package}}Controller');
    }
}
