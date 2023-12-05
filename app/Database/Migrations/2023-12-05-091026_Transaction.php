<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
{
    public function up()
    {
        $this->forge->addField([            
            'transaction_id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'subtotal' => [
                'type' => 'DOUBLE',
                'default' => 0.0
            ],
            'transaction_date' => [
                'type' => 'DATE'                
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
        $this->forge->addForeignKey('player_id', 'player', 'player_id');
        $this->forge->addForeignKey('game_id', 'games', 'game_id');
        $this->forge->createTable('transaction', true);
    }

    public function down()
    {
        $this->forge->dropTable('transaction');
    }
}
