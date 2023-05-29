<?php declare(strict_types=1);

namespace App\Controllers\Auth;

use App\Exceptions\AuthEmailNotValidException;
use App\Models\Authentication;
use App\Models\User;
use App\Tools\Session;
use App\View;

class AuthenticationController
{
    public function register(): View
    {
        return View::make('auth/sign-up');
    }

    public function login(): View
    {
        return View::make('auth/sign-in');
    }

    public function signUp(): void
    {
        $data = [];
        $data['username']   = $_POST['username'];
        $data['email']      = $_POST['email'];
        $data['role_id']    = $_POST['role_id'];
        $data['password']   = $_POST['password'];

        if (! filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new AuthEmailNotValidException();
        }

        if ($data['password'] !== $_POST['retype_password']) {
            throw new \Exception('Password does not match');
        }

        $data['password'] = $this->passwordHash($data['password']);

        $user = (new Authentication())->signUp($data);
        (new Session())->set('user_id', $user);

        redirect('admin/users');
    }

    public function signIn()
    {
        $data = [];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];

        if (! filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new AuthEmailNotValidException();
        }

        $user = (new User())->findByEmail($data['email']);

        if ($user && $this->passwordCheck($data['password'], $user['password'])) {
            (new Session())->set('user_id', $user['id']);

            redirect('admin/users');
            exit();
        } else {
            return null;
        }
    }

    public function logout(): void
    {
        (new Session())->destroy();
        (new Session())->remove('user_id');

        redirect('admin');
        exit();
    }

    public function passwordHash($password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function passwordCheck($password, $hash): bool
    {
        return password_verify($password, $hash);
    }
}