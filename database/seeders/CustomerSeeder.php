<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Hoàng Gia Bảo',
                'address' => 'Hà Nội',
                'gender' => 'Male',
                'job' => 'Sinh viên',
                'birthdate' => '2002-02-02',
                'user_id' => 3,
                'created_at' => '2025-03-26 22:06:35',
                'updated_at' => '2025-03-26 22:06:35'
            ],
            [
                'name' => 'Phạm Hoàng Giang',
                'address' => 'Yên Nghĩa',
                'gender' => 'Male',
                'job' => 'Sinh viên',
                'birthdate' => '2002-02-02',
                'user_id' => 4,
                'created_at' => '2025-03-26 22:07:08',
                'updated_at' => '2025-03-26 22:07:08'
            ],
            [
                'name' => 'Nguyễn Hoàng Nam',
                'address' => 'Hà Nội',
                'gender' => 'Male',
                'job' => 'Sinh viên',
                'birthdate' => '2005-05-05',
                'user_id' => 5,
                'created_at' => '2025-03-26 22:08:13',
                'updated_at' => '2025-03-26 22:08:13'
            ]
        ]);
    }
} 