<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data =
        [
            'nama' => 'Masdalifah',
            'roles' => true,
            'nip' => '123456789',
            'password' => password_hash('password', PASSWORD_DEFAULT),
        ];
        $admin = 
            [
                'nama' => 'User',
                'roles' => false,
                'nip' => '113124124',
                'password' => password_hash('password', PASSWORD_DEFAULT),
            ];
        

        $this->db->table('users')->insert($data);
        $this->db->table('users')->insert($admin);
    }
}
