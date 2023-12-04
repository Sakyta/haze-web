<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RunSeeder extends Seeder
{
    public function run()
    {
        $this->call('PlayerSeeder');
        $this->call('GamesSeeder');
        $this->call('GamePicSeeder');
        $this->call('UsersSeeder');
    }
}
