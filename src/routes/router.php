<?php
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'acceuil.php',
    '/view' => 'view.php',
    '/edit' => 'edit.php',
];

function router($url, $routes)
{
    
    if (array_key_exists($url, $routes)) {
        require_once("{$routes[$url]}");
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The page you are looking for does not exist.";
    }
}

router($url, $routes);

function urlIs($route)
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $route;
}
?>
