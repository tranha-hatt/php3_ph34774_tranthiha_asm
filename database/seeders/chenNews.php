<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenNews extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            ['title'=>'Bộ Chính trị thông báo về sức khỏe của Tổng bí thư Nguyễn Phú Trọng', 
            'summary'=>'Để Tổng bí thư Nguyễn Phú Trọng tập trung điều trị tích cực, Bộ Chính trị phân công Chủ tịch nước Tô Lâm chủ trì công việc của Ban Chấp hành Trung ương Đảng, Bộ Chính trị, Ban Bí thư.', 
            'content'=>'Thời gian qua, theo yêu cầu của Hội đồng chuyên môn bảo vệ sức khỏe cán bộ Trung ương, Tổng bí thư Nguyễn Phú Trọng vừa điều hành công việc, vừa điều trị, chăm sóc sức khỏe.Bộ Chính trị, Ban Bí thư, các lãnh đạo chủ chốt và Thường trực Ban Bí thư đã trực tiếp chỉ đạo các cơ quan chuyên môn tập trung huy động đội ngũ giáo sư, bác sĩ, nhân viên y tế, chuyên gia đầu ngành và những điều kiện thuận lợi nhất để điều trị, chăm sóc sức khỏe cho Tổng bí thư.
            Theo TTXVN, đến nay do yêu cầu phải tiếp tục ưu tiên dành thời gian để Tổng bí thư tập trung điều trị tích cực và để bảo đảm công tác điều hành chung của Ban Chấp hành Trung ương Đảng, Bộ Chính trị, Ban Bí thư, căn cứ Quy chế làm việc của Ban Chấp hành Trung ương, Bộ Chính trị và Ban Bí thư khóa 13, trước mắt Bộ Chính trị phân công ông Tô Lâm, Ủy viên Bộ Chính trị, Chủ tịch nước chủ trì công việc của Ban Chấp hành Trung ương Đảng, Bộ Chính trị, Ban Bí thư theo trách nhiệm, quyền hạn được Bộ Chính trị quy định.',
            'author'=>'Theo TTXVN', 'published_date'=>'2024-07-17', 'imges_url'=>'client/img/news315.jpg', 'views'=>10, 'idLT'=>1
        ],
    ]);
    }
}
