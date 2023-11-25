<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Player extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'player_id' => [
                'type'=> 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'nickname' => [
                'type'=> 'VARCHAR',
                'constraint' => 25,            
                'default' => null                
            ],
            'profile_pic' => [
                'type' => 'BLOB',
                'default' => null
            ],
            'bio'=> [
                'type'=> 'TEXT',
                'default' => "No Bio."
            ],
            'total_game' => [
                'type'=> 'INT',
                'default' => 0
            ],
            'haze_wallet' => [
                'type'=> 'DOUBLE',
                'default' => 0.0
            ],
            'created_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],
            'updated_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ]
        ]);
        $this->forge->addPrimaryKey('player_id');
        $this->forge->createTable('player', true);
    }

    public function down()
    {
        $this->forge->dropTable('player');
    }
}
