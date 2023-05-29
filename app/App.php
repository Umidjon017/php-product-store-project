<?php declare(strict_types=1);

namespace App;

use App\Exceptions\RouteNotFoundException;

class App
{
    private static DB $db;

    public function __construct(protected Config $config)
    {
        static::$db = new DB($config->db ?? []);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run(): void
    {
        $router = new Router();
        (new RoutesList())->configure($router);

        try {
            echo $router->dispatch(new Request());
        } catch (RouteNotFoundException) {
            http_response_code(404);

            echo View::make('pages/404');
        }
    }
}
