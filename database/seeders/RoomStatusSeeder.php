<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomStatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('room_statuses')->insert([
            [
                'name' => 'Đang có khách',
                'code' => 'DKK',
                'information' => 'Phòng đang có khách lưu trú.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng trống - Chưa kiểm tra',
                'code' => 'PT-CKT',
                'information' => 'Phòng trống đã được nhân viên kiểm tra và sẵn sàng cho khách.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-26 21:44:55'
            ],
            [
                'name' => 'Phòng trống - Sẵn sàng',
                'code' => 'PT-SS',
                'information' => 'Phòng trống và sẵn sàng cho khách thuê.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-26 21:45:42'
            ],
            [
                'name' => 'Phòng trống - Chưa sẵn sàng',
                'code' => 'PT-CSS',
                'information' => 'Phòng trống nhưng chưa sẵn sàng vì còn lý do nào đó.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-26 21:46:35'
            ],
            [
                'name' => 'Miễn phí',
                'code' => 'MP',
                'information' => 'Phòng miễn phí cho khách đặc biệt.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Sử dụng nội bộ',
                'code' => 'SDNB',
                'information' => 'Phòng được sử dụng cho mục đích nội bộ của khách sạn.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Không làm phiền',
                'code' => 'KLP',
                'information' => 'Khách yêu cầu không làm phiền.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Vắng mặt',
                'code' => 'VM',
                'information' => 'Khách vẫn lưu trú nhưng tạm thời rời khỏi khách sạn.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Chưa thanh toán',
                'code' => 'CTT',
                'information' => 'Khách rời khỏi khách sạn mà không thanh toán.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-26 21:47:36'
            ],
            [
                'name' => 'Đang bảo trì',
                'code' => 'DBT',
                'information' => 'Phòng đang được bảo trì, không thể sử dụng.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Hỏng hóc',
                'code' => 'HH',
                'information' => 'Phòng bị hỏng hóc nặng, không thể sử dụng trong thời gian dài.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Chuẩn bị trả phòng',
                'code' => 'CBTP',
                'information' => 'Phòng dự kiến sẽ có khách trả phòng hôm nay.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Chuẩn bị nhận phòng',
                'code' => 'CBNP',
                'information' => 'Phòng dự kiến sẽ có khách nhận phòng hôm nay.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Đã trả phòng',
                'code' => 'DTP',
                'information' => 'Khách đã trả phòng và hoàn tất thanh toán.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Trả phòng muộn',
                'code' => 'TPM',
                'information' => 'Khách yêu cầu trả phòng trễ hơn giờ quy định.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Không có hành lý',
                'code' => 'KHL',
                'information' => 'Khách đang lưu trú nhưng không có hành lý trong phòng.',
                'created_at' => '2025-03-25 01:11:57',
                'updated_at' => '2025-03-25 01:11:57'
            ],
            [
                'name' => 'Khóa kép',
                'code' => 'KK',
                'information' => 'Khách yêu cầu khóa kép để bảo đảm riêng tư.',
                'created_at' => '2025-03-25 01:11:57',
                'updated_at' => '2025-03-25 01:11:57'
            ]
        ]);
    }
} 