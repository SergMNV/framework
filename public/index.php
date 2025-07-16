<?php

require_once __DIR__ . '../../vendor/autoload.php';

$routes = require __DIR__ . '../../routes/routes.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

$router = \Framework\Router\simpleRouter($routes);

$routeInfo = $router->dispatch($requestMethod, $requestUri);

switch ($routeInfo[0]) {
    case Framework\Router\Dispatcher::NOT_FOUND:

        break;
}

exit;
