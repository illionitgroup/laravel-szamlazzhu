<?php


namespace IllionItGroup\SzamlazzHu\Providers;


use Illuminate\Support\ServiceProvider;

class SzamlazzHuServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Register provider
     */
    public function register()
    {

        // Load config
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'szamlazz-hu');
    }

    /**
     * Boot service provider
     */
    public function boot()
    {
        // Publish config
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('szamlazz-hu.php'),
        ], 'config');
    }

    /**
     * Provider is defer
     *
     * @return array
     */
    public function provides()
    {
    }
}
