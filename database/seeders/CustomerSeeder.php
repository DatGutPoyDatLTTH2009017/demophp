<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Lê THành Đạt',
                'address' => 'Hải Dương',
                'created_at' => Carbon::now()
            ],[
                'id' => 2,
                'name' => 'Vương Văn Hiếu',
                'address' => 'Hải Dương',
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'Hoàng Đắc Phương',
                'address' => 'Hải Phòng',
                'created_at' => Carbon::now()
            ],[
                'id' => 4,
                'name' => 'Nguyễn Hoàng Tuấn',
                'address' => 'Hải Dương',
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'Nguyễn Xuân Hinh',
                'address' => 'Hà Nội',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
