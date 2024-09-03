<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/home.php',
    '/student' => 'controllers/student.php',
    '/teacher' => 'controllers/teacher.php',
    '/login' => 'auth/login.php',
    '/register' => 'auth/register.php',
];



function routeController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require '404.php';
    die();
}

routeController($uri, $routes);
