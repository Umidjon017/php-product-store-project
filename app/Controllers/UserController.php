<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;
use App\View;

class UserController
{
    public function index(): View
    {
        $users = (new User())->findAll();

        return View::make('admin/users/index', [
            'users' => $users
        ]);
    }
}