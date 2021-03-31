<?php

namespace Boot\Foundation;


use Boot\Foundation\Bootstrappers\LoadDebuggingPage;
use Boot\Foundation\Bootstrappers\LoadEnvironmentVariables;
use Boot\Foundation\Bootstrappers\LoadHttpMiddleware;
use Boot\Foundation\Bootstrappers\LoadServiceProviders;

class HttpKernel extends Kernel
{
    public array $middleware = [];
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];

    public array $bootstrap = [
        LoadEnvironmentVariables::class,
        LoadDebuggingPage::class,
        LoadHttpMiddleware::class,
        LoadServiceProviders::class,
    ];
}