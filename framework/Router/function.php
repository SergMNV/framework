<?php

use Framework\Router\Router;

if (function_exists('simpleRouter')) {

   function simpleRouter(array $options = []): Router
   {
      $options = [
         
      ];

      $router = new Router();

      return $router;
   }
}
