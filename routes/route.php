<?php
 
 use App\Controllers\ProductController;
// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/',   ProductController::class . '@index');
$router->get('/add',   ProductController::class . '@create');

  

// Run it!
$router->run();