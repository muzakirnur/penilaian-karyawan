<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kriteria;

class KriteriaController extends BaseController
{
    protected $kriteria;
    public function __construct()
    {
        $this->kriteria = new Kriteria();
    }
    public function index()
    {
        $data = [
            'page' => 'Kriteria Penilaian',
            'kriterias' => $this->kriteria->paginate(10),
            'pager' => $this->kriteria->pager,
        ];
        return view('admin/kriteria/index', $data);
    }
}
