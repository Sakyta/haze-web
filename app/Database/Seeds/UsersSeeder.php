<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'nurkahfi',
                'password' => MD5('kahfi123'),
                'user_id' => 'K4HF1',
                'created_at' => Time::now()
            ],
            [
                'username' => 'rumirifai',
                'password' => MD5('rumi1234'),
                'user_id' => 'RUM1R',
                'created_at' => Time::now()
            ],
            [
                'username' => 'anelabiyyu',
                'password' => MD5('anel1234'),
                'user_id' => '4N3L4',
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
