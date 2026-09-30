<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['title'] = 'User Accounts';
        $data['users'] = $model->orderBy('id', 'ASC')->findAll();

        return view('users/index', $data);
    }
}