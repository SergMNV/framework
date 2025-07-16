<?php

use Framework\Router\Route;

return [
    Route::get('/', fn() => 'hello world!'),
    Route::get('/home', fn() => 'home page!'),

];
