<?php

return [
    'name' => env('APP_NAME', 'Slim Framework'),

    'providers' => [
        \App\Providers\DataBaseServiceProvider::class,
        \App\Providers\ViewServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
    ],
    'aliases' => [
        'DB' => \Illuminate\Database\Capsule\Manager::class,
    ]
];