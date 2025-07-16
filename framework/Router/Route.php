<?php

namespace Framework\Router;

class Route
{
    public function __construct(
        public readonly string $method,
        public readonly string $path,
        public readonly mixed $handler,
    ) {}

    public static function get(string $path, mixed $handler): static
    {
        return new static('GET', $path, $handler);
    }

    public static function post(string $path, mixed $handler): static
    {
        return new static('POST', $path, $handler);
    }

    public static function delete(string $path, mixed $handler): static
    {
        return new static('DELETE', $path, $handler);
    }
}
