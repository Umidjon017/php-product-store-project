<?php declare(strict_types=1);

namespace App;

use App\Contracts\RouterInterface;
use App\Controllers\Auth\AuthenticationController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\SettingController;
use App\Controllers\UserController;

class RoutesList
{
    public function configure(RouterInterface $router): void
    {
        $router->get('/', [HomeController::class, 'index']);

        // Admin
        $router->get('/admin', [DashboardController::class, 'index']);
        $router->get('/admin/users', [UserController::class, 'index']);
        $router->get('/settings', [SettingController::class, 'index']);

        // Authentication
        $router->get('/sign-up', [AuthenticationController::class, 'register']);
        $router->post('/sign-up', [AuthenticationController::class, 'signUp']);
        $router->get('/sign-in', [AuthenticationController::class, 'login']);
        $router->post('/sign-in', [AuthenticationController::class, 'signIn']);
        $router->post('/logout', [AuthenticationController::class, 'logout']);
    }
}