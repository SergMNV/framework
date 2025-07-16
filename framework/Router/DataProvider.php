<?php

namespace Framework\Router;

use Framework\Router\DataProvider\DataProviderInterface;
use Framework\Router\Route;
use InvalidArgumentException;

class DataProvider implements DataProviderInterface
{
    private array $data;

    public function __construct(
        private array $routes,
    ) {

        foreach ($routes as $item) {
            if (!$item instanceof Route) {
                return new InvalidArgumentException();
            }

            $this->data[$item->method][] = $item;
        }
    }

    public function getData(): array
    {
        return array(
            $this->data,
        );
    }
}
