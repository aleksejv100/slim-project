<?php

namespace Boot\Foundation;


use Boot\Foundation\Bootstrappers\LoadAliases;
use Boot\Foundation\Bootstrappers\LoadDebuggingPage;
use Boot\Foundation\Bootstrappers\LoadEnvironmentVariables;
use Boot\Foundation\Bootstrappers\LoadHttpMiddleware;
use Boot\Foundation\Bootstrappers\LoadServiceProviders;

class HttpKernel extends Kernel
{
    /**
     * @var array
     */
    public array $middleware = [];

    /**
     * @var array|array[]
     */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];

    public array $bootstrap = [
        LoadEnvironmentVariables::class,
        LoadDebuggingPage::class,
        LoadAliases::class,
        LoadHttpMiddleware::class,
        LoadServiceProviders::class,
    ];
}