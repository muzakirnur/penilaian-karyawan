<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public function __construct()
    {
        if (session()->get('roles') != false) {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("user/dashboard");
    }
}
