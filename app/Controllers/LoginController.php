<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        // 
    }
}
