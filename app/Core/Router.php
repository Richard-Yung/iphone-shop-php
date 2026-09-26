<?php
/**
 * Routeur minimaliste et rapide — correspondance exacte puis regex.
 */

declare(strict_types=1);

final class Router
{
    /** @var array<string, callable> */
    private array $routes = [];

    public function get(string $path, callable $handler): void
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri    = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        $uri    = rtrim($uri, '/') ?: '/';

        // Correspondance exacte
        if (isset($this->routes[$method][$uri])) {
            ($this->routes[$method][$uri])();
            return;
        }

        http_response_code(404);
        echo '404 — Page introuvable';
    }
}
