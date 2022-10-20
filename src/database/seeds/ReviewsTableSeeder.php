<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'isbn' => '9784101010137',
            'read_start_date' => '2022-01-01',
            'read_end_date' => '2022-01-31',
            'current_page' => 0,
            'rate' => 5, // 1 to 5
            'comment' => '夏目漱石著「こころ」',
            'is_open' => false
        ];
        DB::table('reviews')->insert($param);

        $param = [
            'user_id' => 2,
            'isbn' => '9784101253329',
            'read_start_date' => '2022-04-01',
            'read_end_date' => '2022-04-30',
            'current_page' => 0,
            'rate' => 5,
            'comment' => '梨木香歩著「西の魔女が死んだ」',
            'is_open' => false
        ];
        DB::table('reviews')->insert($param);
    }
}
