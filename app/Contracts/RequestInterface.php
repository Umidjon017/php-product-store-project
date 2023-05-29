<?php declare(strict_types=1);

namespace App\Contracts;

interface RequestInterface
{
    public function getRoute(): string;

    public function getMethod(): string;

    public function getQuery(): ?string;

    public function getQueryParams(): array;

    public function getParam(string $name): ?string;

    public function getParams(): array;
}