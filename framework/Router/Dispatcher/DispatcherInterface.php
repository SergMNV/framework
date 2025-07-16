<?php

namespace Framework\Router\Dispatcher;

interface DispatcherInterface
{
    public function dispatch(array $collection, string $method, string $path): array;
}
