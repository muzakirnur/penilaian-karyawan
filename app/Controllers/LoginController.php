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
        // Mendefinisikan Email dan Password dari Request
        $emailRequest = $this->request->getVar('nip');
        $passRequest = $this->request->getVar('password');

        // Get User Data
        $userData = $this->userModel->where('nip', $emailRequest)->first();

        // Check if Data Exist
        if (!$userData == null) {
            // Checking the Password Value
            $authPassword = password_verify($passRequest, $userData['password']);
            if ($authPassword == true) {
                // Make Session Login
                $user = [
                    'id' => $userData['id'],
                    'nama' => $userData['nama'],
                    'nip' => $userData['nip'],
                    'roles' => $userData['roles'],
                    'isLoggedIn' => TRUE,
                ];
                session()->set($user);
                return redirect()->to('admin')->with('success', 'Login Successfully');
            } else {
                session()->setFlashdata('error', 'The credential is incorrect');
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata('error', 'The NIP doesnt exist');
            return redirect()->back()->withInput();
        }
    }
}
