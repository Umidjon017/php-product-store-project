<?php declare(strict_types=1);

namespace App\Controllers;

use App\View;

class SettingController
{
    public function index(): View
    {
        return View::make('pages/settings');
    }
}