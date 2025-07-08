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

    public function action()
    {
        if (is_array($this->handler)) {
            
        }

        if(is_callable($this->handler)){
            call_user_func($this->handler)
        }
    }

    
}
