<?php

namespace Framework\Router;

if (!function_exists('simpleRouter')) {

   function simpleRouter(array $routes, array $options = []): Router
   {
      $options += [
         'routeCollector' => 'Framework\Router\RouteCollector\RouteCollector',
         'dispather' => 'Framework\Router\Dispatcher',
         'parser' => 'Framework\Router\Parser',
         'dataProvider' => 'Framework\Router\DataProvider',
      ];

      $collector = new $options['routeCollector'](
         new $options['dataProvider']($routes),
         new $options['parser'],
      );

      dd($collector->getCollection());

      $router = new Router(
         new $options['dispather'],
         $collector,
      );

      return $router;
   }
}
