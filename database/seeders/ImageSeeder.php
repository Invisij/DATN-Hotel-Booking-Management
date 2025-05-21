<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->insert([
            [
                'room_id' => 1,
                'url' => 'tc1.png',
                'created_at' => '2025-03-26 22:45:01',
                'updated_at' => '2025-03-26 22:45:01'
            ],
            [
                'room_id' => 2,
                'url' => 'cc1.png',
                'created_at' => '2025-03-26 22:41:32',
                'updated_at' => '2025-03-26 22:41:32'
            ],
            [
                'room_id' => 3,
                'url' => 'st1.png',
                'created_at' => '2025-03-26 22:44:35',
                'updated_at' => '2025-03-26 22:44:35'
            ],
            [
                'room_id' => 4,
                'url' => 'hn1.png',
                'created_at' => '2025-03-26 22:43:22',
                'updated_at' => '2025-03-26 22:43:22'
            ],
            [
                'room_id' => 5,
                'url' => 'hs1.png',
                'created_at' => '2025-03-26 22:44:03',
                'updated_at' => '2025-03-26 22:44:03'
            ],
            [
                'room_id' => 6,
                'url' => 'tt1.png',
                'created_at' => '2025-03-26 22:45:55',
                'updated_at' => '2025-03-26 22:45:55'
            ],
            [
                'room_id' => 7,
                'url' => 'd1.png',
                'created_at' => '2025-03-26 22:42:29',
                'updated_at' => '2025-03-26 22:42:29'
            ],
            [
                'room_id' => 8,
                'url' => 'hgd1.png',
                'created_at' => '2025-03-26 22:40:15',
                'updated_at' => '2025-03-26 22:40:15'
            ],
            [
                'room_id' => 9,
                'url' => 'gd1.png',
                'created_at' => '2025-03-26 22:40:50',
                'updated_at' => '2025-03-26 22:40:50'
            ],
            [
                'room_id' => 10,
                'url' => 'b1.png',
                'created_at' => '2025-03-26 22:35:47',
                'updated_at' => '2025-03-26 22:35:47'
            ],
            [
                'room_id' => 11,
                'url' => 'dcnkt1.png',
                'created_at' => '2025-03-26 22:48:09',
                'updated_at' => '2025-03-26 22:48:09'
            ]
        ]);
    }
} 