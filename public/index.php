<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'vendor/autoload.php';

require BASE_PATH . 'Core/functions.php';

// INSTEAD OF THE FUNCTION BELOW, WE'RE USING AUTOLOAD.PHP ABOVE.
// spl_autoload_register(function ($class) {
//     $class = str_replace('\\', '/', $class);
//     require base_path("{$class}.php");
// });

use Core\Session;
use Core\ValidationException;

Session::start();

require base_path('bootstrap.php');

$router = new Core\Router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
$routes = require base_path('routes.php');

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('old', $exception->old);
    Session::flash('errors', $exception->errors);

    return redirect($router->previousUrl());
}

// unset(); code didn't execute because execution stopped after $router->route(); route() method was missing return statement and code continued and executed die() in the end before executing unset. 
Session::unflash();

// way to see routes array. 
// $router->dumster();
