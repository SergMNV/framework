<?php

namespace Framework\Router\RouteCollector;

interface RouteCollectorInterface
{
    public function addRoute();

    public function matching();
}
