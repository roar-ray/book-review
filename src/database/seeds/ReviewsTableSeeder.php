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
            'volume_id' => 'Jb3GNmCzcIoC',
            'comment' => '夏目漱石著「こころ」'
        ];
        DB::table('reviews')->insert($param);

        $param = [
            'user_id' => 2,
            'volume_id' => 'PGclAAAACAAJ',
            'comment' => '梨木香歩著「西の魔女が死んだ」',
         ];
        DB::table('reviews')->insert($param);
    }
}
