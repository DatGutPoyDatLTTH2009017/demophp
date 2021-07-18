<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Bánh mì trứng',
                'price' => 10000,
                'created_at' => Carbon::now()
            ],[
                'id' => 2,
                'name' => 'Bánh mì xúc xích',
                'price' => 15000,
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'Bún chả',
                'price' => 30000,
                'created_at' => Carbon::now()
            ],[
                'id' => 4,
                'name' => 'Bún mộc',
                'price' => 20000,
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'Phở bò',
                'price' => 50000,
                'created_at' => Carbon::now()
            ],[
                'id' => 6,
                'name' => 'Bún bò Huế',
                'price' => 30000,
                'created_at' => Carbon::now()
            ],[
                'id' => 7,
                'name' => 'Miến Lươn',
                'price' => 20000,
                'created_at' => Carbon::now()
            ],[
                'id' => 8,
                'name' => 'Bánh mì Pate',
                'price' => 10000,
                'created_at' => Carbon::now()
            ],[
                'id' => 9,
                'name' => 'Bánh tráng trộn',
                'price' => 15000,
                'created_at' => Carbon::now()
            ],[
                'id' => 10,
                'name' => 'Bò húc',
                'price' => 10000,
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
