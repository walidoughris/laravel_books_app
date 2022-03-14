<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'user_id'=>'',
                'book_id'=>'',
                'comment'=>'',
                'added_date'=>''
            ],
            [
                'user_id'=>'',
                'book_id'=>'',
                'comment'=>'',
                'added_date'=>''
            ],
            [
                'user_id'=>'',
                'book_id'=>'',
                'comment'=>'',
                'added_date'=>''
            ]
        ]);
    }
}
