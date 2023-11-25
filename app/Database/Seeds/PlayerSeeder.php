<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'player_id' => 'K4HF1',
                'nickname' => 'FiRanDa',
                'profile_pic' => null,
                'bio' => 'Halo Perkenalkan Aku Kahfi',
                'total_game' => 0,
                'haze_wallet' => 0.0,
                'created_at' => Time::now()
            ],
            [
                'player_id' => 'RUM1R',
                'nickname' => 'RuRi',
                'profile_pic' => null,
                'bio' => 'Halo Perkenalkan Aku Rumi',
                'total_game' => 0,
                'haze_wallet' => 0.0,
                'created_at' => Time::now()
            ],
            [
                'player_id' => '4N3L4',
                'nickname' => 'AnFu',
                'profile_pic' => null,
                'bio' => 'Halo Perkenalkan Aku Anel',
                'total_game' => 0,
                'haze_wallet' => 0.0,
                'created_at' => Time::now()
            ]
        ];
        $this->db->table("player")->insertBatch($data);
    }
}
