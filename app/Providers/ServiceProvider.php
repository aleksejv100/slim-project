<?php


namespace App\Providers;

use Slim\App;

/**
 * Class ServiceProvider
 * @package App\Providers
 */
abstract class ServiceProvider
{
    public $app;

    /**
     * ServiceProvider constructor.
     * @param App $app
     */
    final public function __construct(App $app)
    {
        $this->app = $app;
    }

    abstract public function register();
    abstract public function boot();

    /**
     * @param App $app
     * @param array $providers
     */
    final public static function setup(App &$app, array $providers)
    {
        $providers = array_map(function ($provider) use($app) {
            return new $provider($app);
        }, $providers);

        array_walk($providers, function(ServiceProvider $provider) {
            return $provider->register();
        });
        array_walk($providers, function(ServiceProvider $provider) {
            return $provider->boot();
        });
    }
}