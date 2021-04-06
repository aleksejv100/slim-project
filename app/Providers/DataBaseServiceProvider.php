<?php


namespace App\Providers;

use DB;

class DataBaseServiceProvider extends ServiceProvider
{

    public function register()
    {
        $options = data_get(config('database.connections'), config('database.default'));

        $capsule = new DB;
        $capsule->addConnection($options);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $this->bind(DB::class, fn () => $capsule);
    }

    public function boot()
    {
        // TODO: Implement boot() method.
    }
}