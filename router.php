<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require 'routes.php';

// redirects to corresponding controller
function redirectToController($url, $routes)
{
    // checks whether URL exists in $routes array
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        // if not runs the function below which is 
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

redirectToController($url, $routes);
