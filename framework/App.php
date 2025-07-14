<?php

namespace Framework;

use Framework\Router\Router;

class App
{
    private static $instance;

    private array $config = [
        'routes' => []
    ];
    
    private array $container = [
        'router' => fn(array $routes) => new Router($routes),
    ];

    private function __construct() {}
    private function __clone() {}

    public static function getInstance(): static
    {
        if (!self::$instance) {
            self::$instance = new static();
            return self::$instance;
        }

        return self::$instance;
    }

    public function run()
    {
        print 'run';
        // dd(self::$instance);
        exit;
        //dd(realpath(__DIR__ . '../../routes/routes.php'));
    }
}
