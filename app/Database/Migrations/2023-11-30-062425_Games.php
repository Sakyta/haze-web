<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Games extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'game_id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'game_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null
            ],
            'game_description' => [
                'type' => 'TEXT',
                'default' => null
            ],
            'price' => [
                'type' => 'DOUBLE',
                'default' => 0.0
            ],
            'genre' => [
                'type' => 'TEXT',
                'default' => null
            ],
            'rating' => [
                'type' => "FLOAT",
                'default' => 0.0
            ],
            'game_pic' => [
                'type' => "MEDIUMTEXT",
                'default' => null
            ],
            'release_date' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null
            ],
            'developer' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null
            ],
            'publisher' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null
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
        $this->forge->addPrimaryKey('game_id');
        $this->forge->createTable('games', true);
    }

    public function down()
    {
        $this->forge->dropTable('games');
    }
}
