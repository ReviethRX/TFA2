<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'jcruz', 'full_name' => 'Juana Cruz', 'role' => 'Admin'],
            ['username' => 'msantos', 'full_name' => 'Miguel Santos', 'role' => 'Cashier'],
            ['username' => 'preyes', 'full_name' => 'Paula Reyes', 'role' => 'Manager'],
            ['username' => 'alopez', 'full_name' => 'Andres Lopez', 'role' => 'Cashier'],
            ['username' => 'cgarcia', 'full_name' => 'Carmen Garcia', 'role' => 'Staff'],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}
