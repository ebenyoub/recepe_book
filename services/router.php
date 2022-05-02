<?php

require_once 'config/settings.php';
$controller = getRoute();

if ($controller !== '' && file_exists($controller)) {
    require $controller;
} else {
    echo '<p>Path non constuit !</p>';
}

function getRoute():string {
    $page = '';
    $controllersBasePath = 'controllers/';
    $route = realpath($controllersBasePath . DEFAULT_ROUTE);
    if (!empty($_GET) && isset($_GET['page'])) {
        $page = $_GET['page'];
        $route = realpath($controllersBasePath . AVAILABLE_ROUTES[$page]);
    }
    return $route;
}