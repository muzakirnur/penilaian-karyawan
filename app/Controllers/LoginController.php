<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\Request;

class LoginController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        // $this->request = new Request;
        $this->userModel = new User;
    }

    public function index()
    {
        return view('login');
    }

    public function auth()
    {
        $data = [];


            $rules = [
                'email' => 'required',
                'password' => 'required',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new User();

                $user = $model->where('nip', $this->request->getVar('nip'))
                    ->first();

                // Stroing session values
                $this->setUserSession   ($user);

                // Redirecting to dashboard after login
                if($user['roles'] == true){

                    return redirect()->to(base_url('admin/dashboard'));

                }elseif($user['roles'] == false){

                    return redirect()->to(base_url('user'));
                }
            }
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'nama' => $user['nama'],
            'nip' => $user['nip'],
            "roles" => $user['roles'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}

