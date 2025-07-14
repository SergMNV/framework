<?php

namespace Framework\Router;

use Framework\Router\Dispatcher\DispatcherInterface;
use Framework\Router\RouteParser\RouteParserInterface;

class Router
{
    public function __construct(
        // private readonly array $routes = [],
    ) {}

    public ?Route $current = null;
    /**
     * RouteCollector
     *  public function addRoute();
            public function matching();
     */
    public function addRoute(string $metod, string $uri, callable $handler): void
    {
        // добавление роута

        /**
         * группа префикс
         */
    }

    public function dispatch()
    {
        // вызов роута
    }

    public function matching()
    {
        // вычесление роута
    }

    public function normalisePath(string $path): string
    {
        $path = trim("{$path}");
        $path = preg_replace('#/{2,}#', '/', $path);

        return $path;
        /**
         * https://www.php.net/manual/ru/function.trim.php
         * https://www.php.net/manual/ru/function.preg-replace.php
         */
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
