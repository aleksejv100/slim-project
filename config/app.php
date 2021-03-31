<?php

return [
    'name' => env('APP_NAME', 'Slim Framework'),

    'providers' => [
        \App\Providers\ViewServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
    ]
];