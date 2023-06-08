<?php declare(strict_types=1);

namespace App;

use App\Contracts\RequestInterface;

class Request implements RequestInterface
{
    private array $server;
    private array $params = [];

    public function __construct()
    {
        $this->server = $_SERVER;
    }

    public function getServer(string $name): ?string
    {
        return $this->server[$name] ?? null;
    }

    public function getUri(): array
    {
        return parse_url($this->getServer('REQUEST_URI'));
    }

    public function getRoute(): string
    {
        $uri = $this->getUri();
        return $uri['path'];
    }

    public function getMethod(): string
    {
        return strtolower($this->getServer('REQUEST_METHOD'));
    }

    public function getQuery(): ?string
    {
        $uri = $this->getUri();
        return $uri['query'] ?? null;
    }

    public function getQueryParams(): array
    {
        $params = [];
        if ($this->getQuery()) {
            parse_str($this->getQuery(), $params);
        }

        return $params;
    }

    public function getParam(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }

    public function getParams(): array
    {
        return $this->params ?? [];
    }

    public function all(): array
    {
        $requestedData = [];

        if ($this->getMethod() === 'post') {
            $requestedData = $_POST;
        }
        elseif ($this->getMethod() === 'get') {
            $requestedData = $_GET;
        } else {
            return [];
        }

        return $requestedData;
    }
}