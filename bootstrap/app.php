<?php

use DI\Container;
use DI\Bridge\Slim\Bridge as App;

$app = App::create(new Container());

return \App\HttpKernel::bootstrap($app)->getApplication();
