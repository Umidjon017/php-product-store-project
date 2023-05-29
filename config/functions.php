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
