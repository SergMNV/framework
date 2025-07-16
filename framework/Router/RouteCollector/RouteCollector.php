<?php

namespace Framework\Router\RouteCollector;

use Framework\Router\DataProvider\DataProviderInterface;
use Framework\Router\Parser\ParserInterface;
use Framework\Router\Route;

class RouteCollector implements RouteCollectorInterface
{
    private array $data = [];

    public function __construct(
        private DataProviderInterface $dataProvider,
        private ParserInterface $parser,
    ) {}

    public function getCollection(): array
    {
        return $this->dataProvider->getData();
    }

    private function sort(Route $item): void
    {
        $this->data[$item->method] = [$this->normalisePath($item->path), $item->handler];
    }

    private function normalisePath(string $path): string
    {
        $path = trim("{$path}");
        $path = preg_replace('#/{2,}#', '/', $path);

        return $path;
        /**
         * https://www.php.net/manual/ru/function.trim.php
         * https://www.php.net/manual/ru/function.preg-replace.php
         */
    }
}
