<?php

namespace Framework\Router;

use Framework\Router\Dispatcher\DispatcherInterface;

class Dispatcher implements DispatcherInterface
{
    public const NOT_FOUND = 1;
    public const METHOD_NOT_ALLOWED = 2;
    public const FOUND = 3;

    public function dispatch(array $collection, string $method, string $path): array
    {
        return [];
    }
}
