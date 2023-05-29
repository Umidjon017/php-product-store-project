<?php declare(strict_types=1);

namespace App;

use App\Contracts\RouterInterface;
use App\Controllers\DashboardController;
use App\Controllers\InvoiceController;
use App\Controllers\SettingController;

class RoutesList
{
    public function configure(RouterInterface $router): void
    {
        $router->get('/', [DashboardController::class, 'index']);
        $router->get('/invoices', [InvoiceController::class, 'index']);
        $router->get('/settings', [SettingController::class, 'index']);
    }
}