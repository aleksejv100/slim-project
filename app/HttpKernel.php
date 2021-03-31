<?php


namespace App;

use App\Middleware\ExampleAfterMiddleware;
use App\Middleware\ExampleBeforeMiddleware;
use Boot\Foundation\HttpKernel as Kernel;

class HttpKernel extends Kernel
{
    /**
     * @var array
     */
    public array $middleware = [

    ];

    /**
     * @var array|array[]
     */
    public array $middlewareGroups = [
        'web' => [],
        'api' => [
            ExampleAfterMiddleware::class,
            ExampleBeforeMiddleware::class,
        ],
    ];
}