<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Quản lý khách sạn',
                'email' => 'quanly@gmail.com',
                'avatar' => null,
                'role' => 'Super',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'random_key' => 'U1oLyQQx3TxZsfoDzHDPj2siaERFqxrJXCXMQZEWOqA56n6WU9thbCXQ6Pm4',
                'remember_token' => null,
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'avatar' => null,
                'role' => 'Admin',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'random_key' => 'sYHB1Cl8klEFcb9r9BBX28T3g4kl5DMnMwrp1ireyPq47GGy3RpEnbw3yECx',
                'remember_token' => null,
                'created_at' => '2025-03-25 01:14:11',
                'updated_at' => '2025-03-25 01:14:11'
            ],
            [
                'name' => 'Hoàng Gia Bảo',
                'email' => 'hoanggiabao@gmail.com',
                'avatar' => 'tv.jpg',
                'role' => 'Receptionist',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'random_key' => 'JHxsojDbU6Qs35ZiBk6Q7ACnHCKHfpiyz5ZXE1AiH7tqTYAm1U8ECGBP7QbD',
                'remember_token' => null,
                'created_at' => '2025-03-26 22:06:34',
                'updated_at' => '2025-03-26 22:06:35'
            ],
            [
                'name' => 'Phạm Hoàng Giang',
                'email' => 'hoanggiang@gmail.com',
                'avatar' => 'nak.jpg',
                'role' => 'Receptionist',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'random_key' => 'PaJzXC0pwI1Nsz6RIut51DAk1HE1DsZG6N5EApdS7k3S2pT6P9PeF0NQ3eCs',
                'remember_token' => null,
                'created_at' => '2025-03-26 22:07:08',
                'updated_at' => '2025-03-26 22:07:08'
            ],
            [
                'name' => 'Nguyễn Hoàng Nam',
                'email' => 'nguyenhoangnam@gmail.com',
                'avatar' => 'kaine.jpg',
                'role' => 'Receptionist',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'random_key' => 'acKXkIQvDUAMaGbbBa692bZaVoNsEurNN3tePOCGeCggyh8znLqob0ODV0F6',
                'remember_token' => null,
                'created_at' => '2025-03-26 22:08:13',
                'updated_at' => '2025-03-26 22:08:13'
            ]
        ]);
    }
}
