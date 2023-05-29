<?php declare(strict_types=1);

namespace App;

use App\Contracts\RequestInterface;
use App\Contracts\RouterInterface;
use App\Exceptions\RouteNotFoundException;

class Router implements RouterInterface
{
    public function __construct(private array $routes = []) {}

    public function register(string $requestMethod, string $route, callable|array $action): void
    {
        $this->routes[$requestMethod][$route] = $action;
    }

    public function get(string $route, callable|array $action): void
    {
        $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): void
    {
        $this->register('post', $route, $action);
    }

    public function dispatch(RequestInterface $request)
    {
        $route = $request->getRoute();
        $method = $request->getMethod();

        $action = $this->routes[$method][$route] ?? null;

        if (! $action) {
            throw new RouteNotFoundException;
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
    }
}