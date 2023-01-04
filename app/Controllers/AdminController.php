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
    public function dashboard()
    {
        $data = 
        [
            'page' => "Dashboard Admin",
        ];
        return view("admin/dashboard", $data);
    }
}
