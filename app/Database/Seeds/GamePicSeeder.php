<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GamePicSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'game_id' => 'BHUIS',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/BHUIS/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/BHUIS/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/BHUIS/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/BHUIS/preview-4.jpg')),
            ],
            [
                'game_id' => 'ESFUI',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/ESFUI/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/ESFUI/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/ESFUI/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/ESFUI/preview-4.jpg')),
            ],
            [
                'game_id' => 'FSBLH',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/FSBLH/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/FSBLH/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/FSBLH/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/FSBLH/preview-4.jpg')),
            ],
            [
                'game_id' => 'GFERU',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/GFERU/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/GFERU/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/GFERU/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/GFERU/preview-4.jpg')),
            ],
            [
                'game_id' => 'JUOIG',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/JUOIG/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/JUOIG/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/JUOIG/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/JUOIG/preview-4.jpg')),
            ],
            [
                'game_id' => 'MHDJA',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/MHDJA/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/MHDJA/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/MHDJA/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/MHDJA/preview-4.jpg')),
            ],
            [
                'game_id' => 'OIJGR',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/OIJGR/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/OIJGR/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/OIJGR/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/OIJGR/preview-4.jpg')),
            ],
            [
                'game_id' => 'ONJIF',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/ONJIF/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/ONJIF/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/ONJIF/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/ONJIF/preview-4.jpg')),
            ],
            [
                'game_id' => 'RDGLR',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/RDGLR/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/RDGLR/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/RDGLR/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/RDGLR/preview-4.jpg')),
            ],
            [
                'game_id' => 'SFNJK',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/SFNJK/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/SFNJK/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/SFNJK/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/SFNJK/preview-4.jpg')),
            ],
            [
                'game_id' => 'SGNLK',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/SGNLK/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/SGNLK/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/SGNLK/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/SGNLK/preview-4.jpg')),
            ],
            [
                'game_id' => 'UIEFS',
                'game_pic_1' => base64_encode(file_get_contents('../public/img/UIEFS/preview-1.jpg')),
                'game_pic_2' => base64_encode(file_get_contents('../public/img/UIEFS/preview-2.jpg')),
                'game_pic_3' => base64_encode(file_get_contents('../public/img/UIEFS/preview-3.jpg')),
                'game_pic_4' => base64_encode(file_get_contents('../public/img/UIEFS/preview-4.jpg')),
            ]
        ];
        $this->db->table('game_pic')->insertBatch($data);
    }
}
