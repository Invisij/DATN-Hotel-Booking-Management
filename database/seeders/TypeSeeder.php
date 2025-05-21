<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('types')->insert([
            [
                'name' => 'Phòng Tiêu Chuẩn',
                'information' => 'Phòng tiêu chuẩn có giá thành rẻ nhất, phù hợp với khách du lịch tiết kiệm.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Cao Cấp',
                'information' => 'Phòng cao cấp có diện tích lớn hơn và nội thất tốt hơn phòng tiêu chuẩn.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Sang Trọng',
                'information' => 'Phòng sang trọng có diện tích rộng rãi hơn với trang bị nội thất cao cấp.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Hạng Nhỏ',
                'information' => 'Phòng hạng nhỏ có không gian phòng khách nhỏ gọn nhưng vẫn tiện nghi.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Hạng Sang',
                'information' => 'Phòng hạng sang có phòng khách riêng biệt, đôi khi kèm theo bếp nhỏ.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Tổng Thống',
                'information' => 'Phòng tổng thống là loại phòng cao cấp nhất, thường có nhiều phòng riêng biệt.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Đơn',
                'information' => 'Phòng đơn có một giường nhỏ, phù hợp với khách đi một mình.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Hai Giường Đơn',
                'information' => 'Phòng hai giường đơn có hai giường riêng biệt, phù hợp với bạn bè hoặc đồng nghiệp.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Giường Đôi',
                'information' => 'Phòng giường đôi có giường lớn, thích hợp cho các cặp đôi hoặc vợ chồng.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Ba',
                'information' => 'Phòng gia đình có không gian rộng, thường có nhiều giường để phù hợp với nhóm lớn.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-26 21:35:41'
            ],
            [
                'name' => 'Phòng Thông Nhau',
                'information' => 'Phòng thông nhau có cửa kết nối giữa hai phòng riêng biệt, thuận tiện cho gia đình.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Murphy',
                'information' => 'Phòng Murphy có giường gấp gọn vào tường hoặc thành ghế sofa.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Dành Cho Người Khuyết Tật',
                'information' => 'Phòng dành cho người khuyết tật được thiết kế để dễ dàng di chuyển.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ],
            [
                'name' => 'Phòng Kính Rộng',
                'information' => 'Phòng có cửa kính rộng hướng ra ngoài.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-26 21:39:09'
            ],
            [
                'name' => 'Phòng Cabana',
                'information' => 'Phòng Cabana có hồ bơi riêng hoặc tiếp giáp với hồ bơi chung.',
                'created_at' => '2025-03-25 01:11:56',
                'updated_at' => '2025-03-25 01:11:56'
            ]
        ]);
    }
} 