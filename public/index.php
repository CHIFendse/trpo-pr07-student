<?php
declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';$baseDir = __DIR__ . '/../src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class,$len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);$file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

use App\Core\Router;
use App\Controller\HomeController;
use App\Controller\CatalogController;

$router = new Router();
$router->add('/', HomeController::class, 'index');$router->add('/catalog', CatalogController::class, 'index');

$router->dispatch($_SERVER['REQUEST_URI'] ?? '/');