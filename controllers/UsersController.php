<?php

class UsersController extends BaseController
{
    public function register(string $username, string $password, string $password_confirm)

    { $password_hash = password_hash($password, PASSWORD_DEFAULT);

    }

    public function login()
    {
		// TODO: your user login functionality will come here ...
    }

    public function logout()
    {
		// TODO: your user logout functionality will come here ...
    }
}
