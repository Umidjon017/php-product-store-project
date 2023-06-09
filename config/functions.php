<?php

use JetBrains\PhpStorm\NoReturn;

if (! function_exists('ddv'))
{
    #[NoReturn] function dd(mixed $data): void
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die();
    }
}

if (! function_exists("redirect"))
{
    #[NoReturn] function redirect($link): void
    {
        header("Location: ". "/" . $link);
        exit();
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
