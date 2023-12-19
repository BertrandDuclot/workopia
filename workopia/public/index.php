<?php
require '../helpers.php';
//loadView('home');

$routes = [
    '/workopia/workopia/public/' => 'controllers/home.php',
    '/workopia/workopia/public/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);
} else {
    require basePath($routes['404']);
    echo basePath($routes[$uri]);
}