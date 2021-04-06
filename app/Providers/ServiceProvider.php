<?php


namespace App\Providers;

use Psr\Container\ContainerInterface;
use Slim\App;

/**
 * Class ServiceProvider
 * @package App\Providers
 */
abstract class ServiceProvider
{
    public App $app;

    public ContainerInterface $container;

    /**
     * ServiceProvider constructor.
     * @param App $app
     */
    final public function __construct(App &$app)
    {
        $this->app = $app;

        $this->container = $this->app->getContainer();
    }

    abstract public function register();
    abstract public function boot();

    /**
     * @param App $app
     * @param array $providers
     */
    final public static function setup(App &$app, array $providers)
    {
        $providers = array_map(fn ($provider) => new $provider($app), $providers);

        array_walk($providers, fn (ServiceProvider $provider) => $provider->register());
        array_walk($providers, fn (ServiceProvider $provider) => $provider->boot());
    }

    public function bind($key, callable $resolvable)
    {
        $this->container->set($key, $resolvable);
    }

    public function resolve($key)
    {
        return $this->container->get($key);
    }
}