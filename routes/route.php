<?php

use App\Controllers\ProductController;
// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/',   ProductController::class . '@index');
$router->get('/add',   ProductController::class . '@create');
$router->post('/add', ProductController::class . '@store');
$router->get('/delete/{id}', ProductController::class . '@delete');
$router->get('/show/{id}', ProductController::class . '@show');
$router->get('/edit/{id}', ProductController::class . '@edit');
$router->post('/edit/{id}', ProductController::class . '@update');


// Run it!
$router->run();
