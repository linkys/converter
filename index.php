<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/', '\App\Controllers\HomeController@show');
$router->post('/convert', '\App\Controllers\HomeController@convert');

$router->run();