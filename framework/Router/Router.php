<?php

namespace Framework\Router;

use Framework\Router\Dispatcher\DispatcherInterface;
use Framework\Router\RouteCollector\RouteCollectorInterface;

final class Router
{
    public function __construct(
        private DispatcherInterface $dispatcher,
        private RouteCollectorInterface $routeCollector,
    ) {}

    public ?Route $current = null;

    public function dispatch(string $requestMethod, string $requestUri): array
    {
        $collection = $this->routeCollector->getCollection();
        return $this->dispatcher->dispatch($collection, $requestMethod, $requestUri);
    }

    public function redirect(string $path): void
    {
        header("Location: {$path}");
        exit;
        // https://www.php.net/manual/ru/function.header.php
    }

    public function route(string $name, array $data = [])
    {
        /**
         * функция принимает название роута и
         * массив данных пример: ['product' => '1234', 'user_id'=>555]
         * возращает роут или выдает ошибку???
         */
    }
}
