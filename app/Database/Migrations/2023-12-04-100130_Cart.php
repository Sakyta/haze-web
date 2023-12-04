<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cart extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cart_id' => [
                'type' => 'INT',
                'auto_increment' => true,
                null => false
            ],
            'player_id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'game_id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ]
        ]);
        $this->forge->addPrimaryKey('cart_id');
        $this->forge->addForeignKey('player_id', 'player', 'player_id');
        $this->forge->addForeignKey('game_id', 'games', 'game_id');
        $this->forge->createTable('cart', true);
    }

    public function down()
    {
        $this->forge->dropTable('cart');
    }
}
