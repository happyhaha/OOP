<?php 

include __DIR__ . '/../functions.php';
include __DIR__ .'/../database/Connection.php';
include __DIR__ . '/../database/QueryBuilder.php';
include __DIR__ . '/../components/Router.php';
include __DIR__ . '/../config/routes.php';

$router = new Router($routes);
$router->run();


?>
