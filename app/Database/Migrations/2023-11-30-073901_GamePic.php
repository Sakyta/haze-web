<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GamePic extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'game_id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'game_pic_1' => [
                'type' => "MEDIUMTEXT",
                'default' => null
            ],
            'game_pic_2' => [
                'type' => "MEDIUMTEXT",
                'default' => null
            ],
            'game_pic_3' => [
                'type' => "MEDIUMTEXT",
                'default' => null
            ],
            'game_pic_4' => [
                'type' => "MEDIUMTEXT",
                'default' => null
            ],
        ]);
        $this->forge->addForeignKey('game_id', 'games', 'game_id');
        $this->forge->createTable('game_pic', true);
    }

    public function down()
    {
        $this->forge->dropTable('game_pic');
    }
}
