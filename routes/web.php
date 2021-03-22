<?php

use Core\Support\Route;

Route::get('/', 'PageController@index');
Route::get('/test/{id}', 'PageController@test');