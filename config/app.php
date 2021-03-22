<?php

return [
    'name' => env('APP_NAME', 'Slim Framework'),

    'providers' => [
        \App\Providers\EnvServiceProvider::class,
        \App\Providers\ViewServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ErrorMiddlewareServiceProvider::class,
    ]
];