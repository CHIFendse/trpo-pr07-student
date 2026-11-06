<?php
declare(strict_types=1);

namespace App\Core;

final class Router
{
    private array $routes = [];

    public function add(string $uri, string $controller, string$action): void
    {
        $this->routes[$uri] = [
            'controller' => $controller,
            'action' => $action,
        ];
    }

    public function dispatch(string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?? '/';

        if (!isset($this->routes[$path])) {
            http_response_code(404);
            View::render('404', ['title' => '404 — Страница не найдена']);
            return;
        }

        $controllerClass =$this->routes[$path]['controller'];$action = $this->routes[$path]['action'];

        $controller = new$controllerClass();
        $controller->$action();
    }
}