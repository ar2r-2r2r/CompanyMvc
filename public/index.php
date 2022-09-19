<?php

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('add.php', ['controller' => 'Add', 'action' => 'index']);
$router->add('edit.php', ['controller' => 'Edit', 'action' => 'index']);
$router->add('delete.php', ['controller' => 'Delete', 'action' => 'index']);
$router->add('{controller}/{action}');

//Sorts
$router->add('sortAscByFN', ['controller' => 'Home', 'action' => 'sortAscByFN']);
$router->add('sortDescByFN', ['controller' => 'Home', 'action' => 'sortDescByFN']);
$router->add('sortAscByLN', ['controller' => 'Home', 'action' => 'sortAscByLN']);
$router->add('sortDescByLN', ['controller' => 'Home', 'action' => 'sortDescByLN']);
$router->add('sortAscByDOB', ['controller' => 'Home', 'action' => 'sortAscByDOB']);
$router->add('sortDescByDOB', ['controller' => 'Home', 'action' => 'sortDescByDOB']);
$router->add('sortAscByS', ['controller' => 'Home', 'action' => 'sortAscByS']);
$router->add('sortDescByS', ['controller' => 'Home', 'action' => 'sortDescByS']);

$router->dispatch($_SERVER['QUERY_STRING']);
