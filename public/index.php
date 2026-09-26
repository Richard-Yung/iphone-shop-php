<?php
/**
 * Front controller — point d'entrée unique.
 * Serveur de dev : php -S 0.0.0.0:8080 -t public
 */

declare(strict_types=1);

require dirname(__DIR__) . '/config/config.php';
require APP_ROOT . '/app/Core/Database.php';
require APP_ROOT . '/app/Core/Router.php';
require APP_ROOT . '/app/Core/View.php';
require APP_ROOT . '/app/Models/Product.php';
require APP_ROOT . '/app/Controllers/HomeController.php';
require APP_ROOT . '/app/Controllers/CatalogueController.php';

if (APP_DEBUG) {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
}

$router = new Router();
$router->get('/', [new HomeController(), 'index']);
$router->get('/catalogue', [new CatalogueController(), 'index']);
$router->dispatch();
