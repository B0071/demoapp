<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new Core\Router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
$routes = require base_path('routes.php');

$router->route($method, $uri);
