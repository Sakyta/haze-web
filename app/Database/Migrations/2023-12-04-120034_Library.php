<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Library extends Migration
{
    public function up()
    {
        $this->forge->addField([            
            'player_id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'game_id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'total_playtime' => [
                'type' => 'FLOAT',
                'default' => 0.0
            ]
        ]);        
        $this->forge->addForeignKey('player_id', 'player', 'player_id');
        $this->forge->addForeignKey('game_id', 'games', 'game_id');
        $this->forge->createTable('library', true);
    }

    public function down()
    {
        $this->forge->dropTable('library');
    }
}
