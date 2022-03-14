<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'',
                'avatar'=>'',
                'is_admin'=>'',
                'is_active'=>'',
                'email'=>'',
                'password'=>''
            ],
            [
                'name'=>'',
                'avatar'=>'',
                'is_admin'=>'',
                'is_active'=>'',
                'email'=>'',
                'password'=>''
            ]
        ]);
    }
}
