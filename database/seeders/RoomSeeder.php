<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'type_id' => 1,
                'room_status_id' => 2,
                'number' => 'TC1',
                'capacity' => 4,
                'price' => 500000,
                'view' => 'Thiết kế nhỏ gọn, tiện nghi đầy đủ, phù hợp với những khách hàng yêu thích sự riêng tư',
                'created_at' => '2025-03-26 21:54:54',
                'updated_at' => '2025-03-26 21:54:54'
            ],
            [
                'type_id' => 2,
                'room_status_id' => 3,
                'number' => 'CC1',
                'capacity' => 4,
                'price' => 4000000,
                'view' => 'Quang cảnh độc đáo, bao gồm các yếu tố kiến trúc ấn tượng và sự kết hợp của phong cách cổ điển với hiện đại.',
                'created_at' => '2025-03-26 21:55:46',
                'updated_at' => '2025-03-26 21:55:46'
            ],
            [
                'type_id' => 3,
                'room_status_id' => 4,
                'number' => 'ST1',
                'capacity' => 4,
                'price' => 3000000,
                'view' => 'Không gian tinh tế, nội thất sang trọng, ánh sáng tự nhiên hài hòa.',
                'created_at' => '2025-03-26 21:56:19',
                'updated_at' => '2025-03-26 21:56:19'
            ],
            [
                'type_id' => 4,
                'room_status_id' => 2,
                'number' => 'HN1',
                'capacity' => 4,
                'price' => 1000000,
                'view' => 'Cảnh quan thanh bình, mang lại cảm giác thư giãn với ánh sáng ấm áp và sự kết hợp màu sắc hài hòa.',
                'created_at' => '2025-03-26 21:57:10',
                'updated_at' => '2025-03-26 22:03:50'
            ],
            [
                'type_id' => 5,
                'room_status_id' => 2,
                'number' => 'HS1',
                'capacity' => 4,
                'price' => 3500000,
                'view' => 'Góc nhìn đẹp, phong cách trang nhã, không gian thoải mái và tiện nghi.',
                'created_at' => '2025-03-26 21:58:00',
                'updated_at' => '2025-03-26 21:58:00'
            ],
            [
                'type_id' => 6,
                'room_status_id' => 3,
                'number' => 'TT1',
                'capacity' => 4,
                'price' => 7000000,
                'view' => 'Quang cảnh: Cao cấp, sang trọng.\r\nTiện nghi: Đầy đủ, hiện đại.\r\nTrải nghiệm: Dành cho khách hàng có yêu cầu cao về chất lượng dịch vụ.',
                'created_at' => '2025-03-26 21:59:10',
                'updated_at' => '2025-03-26 21:59:10'
            ],
            [
                'type_id' => 7,
                'room_status_id' => 4,
                'number' => 'D1',
                'capacity' => 1,
                'price' => 400000,
                'view' => 'Thiết kế nhỏ gọn, tiện nghi đầy đủ, phù hợp với những khách hàng yêu thích sự riêng tư.',
                'created_at' => '2025-03-26 22:00:29',
                'updated_at' => '2025-03-26 22:00:29'
            ],
            [
                'type_id' => 8,
                'room_status_id' => 2,
                'number' => 'HGD1',
                'capacity' => 4,
                'price' => 800000,
                'view' => 'Quang cảnh: Đẹp, thoáng đãng.\r\nTiện nghi: Đơn giản nhưng đầy đủ.\r\nTrải nghiệm: Phù hợp cho khách du lịch cần không gian tiện nghi cơ bản.',
                'created_at' => '2025-03-26 22:02:00',
                'updated_at' => '2025-03-26 22:02:00'
            ],
            [
                'type_id' => 9,
                'room_status_id' => 2,
                'number' => 'GD1',
                'capacity' => 4,
                'price' => 800000,
                'view' => 'Quang cảnh: Đẹp, thoáng đãng.\r\nTiện nghi: Đơn giản nhưng đầy đủ.\r\nTrải nghiệm: Phù hợp cho khách du lịch cần không gian tiện nghi cơ bản.',
                'created_at' => '2025-03-26 22:03:01',
                'updated_at' => '2025-03-26 22:03:01'
            ],
            [
                'type_id' => 10,
                'room_status_id' => 2,
                'number' => 'B1',
                'capacity' => 6,
                'price' => 1200000,
                'view' => 'Quang cảnh: Hiện đại, rộng rãi.\r\nTiện nghi: Đầy đủ, sang trọng.\r\nTrải nghiệm: Thích hợp cho gia đình hoặc nhóm nhỏ.',
                'created_at' => '2025-03-26 22:03:35',
                'updated_at' => '2025-03-26 22:03:35'
            ],
            [
                'type_id' => 13,
                'room_status_id' => 5,
                'number' => 'DCNKT1',
                'capacity' => 2,
                'price' => 0,
                'view' => 'Không gian yên tính, đầy đủ vật chất, thiết bị hỗ trợ khách.',
                'created_at' => '2025-03-26 22:05:00',
                'updated_at' => '2025-03-26 22:05:00'
            ]
        ]);
    }
} 