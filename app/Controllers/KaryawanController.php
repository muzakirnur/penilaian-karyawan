<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class KaryawanController extends BaseController
{
    protected $users;
    public function __construct()
    {
        $this->users = new User();
    }
    public function index()
    {
        $data = [
            'page' => 'Data Karyawan',
            'karyawans' => $this->users->paginate(10),
            'pager' => $this->users->pager,
        ];
        return view('admin/karyawan/index', $data);
    }
}
