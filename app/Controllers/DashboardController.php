<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;
use App\Tools\Session;
use App\View;

class DashboardController
{
    public function index(): View
    {
//        $user = (new Session())->get('user_id');
//        if (isset($user)) {
//            $user = (new User())->findById((int)$user);
//        }
        return View::make('admin/dashboard');
    }
}