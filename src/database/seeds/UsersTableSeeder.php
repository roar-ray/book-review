<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'password' => bcrypt('Alice123')
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'Bob',
            'email' => 'bob@example.com',
            'password' => bcrypt('Bob123')
        ];
        DB::table('users')->insert($param);
    }
}
