<?php

if (! function_exists('ddv'))
{
    function ddv(mixed $data): void
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
//        die();
    }
}

if (! function_exists('ddr'))
{
    function ddr(mixed $data): void
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
//        die();
    }
}

if (! function_exists("baseUri"))
{
    function baseUri(string $name): string {
        return '/' . $name;
    }
}

if (! function_exists('baseViewRequire'))
{
    function baseViewRequire(string $name): string
    {
        return VIEW_PATH . '/' . $name . '.php';
    }
}

if (! function_exists("giveClass"))
{
    function giveClass(string $uri, string $class_name): string
    {
        if ((new \App\Request())->getRoute() === $uri) {
            return $class_name;
        }
        return true;
    }
}
