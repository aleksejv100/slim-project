<?php


namespace App\Providers;


use Core\Support\View;
use Slim\Psr7\Factory\ResponseFactory;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->getContainer()->set(View::class, function() {
            return new View(new ResponseFactory);
        });
    }

    public function boot()
    {
        //
    }
}