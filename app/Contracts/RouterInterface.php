<?php declare(strict_types=1);

namespace App\Contracts;

interface RouterInterface
{
    public function register(string $requestMethod, string $route, callable|array $action): void;

    public function get(string $route, callable|array $action): void;

    public function dispatch(RequestInterface $request);
}