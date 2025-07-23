<?php

use Core\Session;
require BASE_PATH . '/vendor/autoload.php';

    session_start();
    
    const BASE_PATH = __DIR__ .'/../';

    require BASE_PATH.'Core/functions.php';


    require base_path('bootstrap.php');

    $router = new \Core\Router();

    $routes = require base_path('routes.php');

    $url = parse_url($_SERVER['REQUEST_URI'])['path'];

    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

    $router->route($url, $method);

    Session::unflash();