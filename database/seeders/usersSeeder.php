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
                'name'=>'oughris walid',
                'avatar'=>'storage/images/users_profiles_images/man2.png',
                'is_admin'=>true,
                'is_active'=>true,
                'email'=>'oughwalid@gmail.com',
                'password'=>'walidwalid'
            ],
            [
                'name'=>'user 1',
                'avatar'=>'storage/images/users_profiles_images/profileImg.png',
                'is_admin'=>false,
                'is_active'=>true,
                'email'=>'user1@gmail.com',
                'password'=>'user1'
            ]
        ]);
    }
}
