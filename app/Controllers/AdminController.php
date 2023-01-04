<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function __construct()
    {
        if (session()->get('roles') != true) {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("admin/dashboard");
    }
}
