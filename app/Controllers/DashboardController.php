<?php declare(strict_types=1);

namespace App\Controllers;

use App\View;

class DashboardController
{
    public function index(): View
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        return View::make('pages/dashboard', [
            'dashboard' => 'Dashboard Page',
            'numbers' => $numbers
        ]);
    }
}