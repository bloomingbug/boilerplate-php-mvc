<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Tarmuji\Belajar\PHP\MVC\App\Router;
use Tarmuji\Belajar\PHP\MVC\Controller\HomeController;
use Tarmuji\Belajar\PHP\MVC\Controller\ProductController;
use Tarmuji\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', HomeController::class, 'login');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about', [AuthMiddleware::class]);
Router::add('GET', '/products/([A-Za-z0-9]*)/categories/([A-Za-z0-9]*)', ProductController::class, 'categories');

Router::run();
