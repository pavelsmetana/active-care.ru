<?php

use App\controller\DefaultController;
use App\controller\HttpController;
use App\controller\SecurityController;
use App\controller\FileController;
use App\controller\TestController;
use App\model\Route;
use App\model\Router;

$request = $_SERVER["REQUEST_URI"] ?? "/";

$router = new Router();
$router->initRoutes();

$router->execute($request);
