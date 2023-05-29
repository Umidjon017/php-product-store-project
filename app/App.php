<?php declare(strict_types=1);

namespace App;

use App\Exceptions\RouteNotFoundException;

class App
{
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
