<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title'=>'',
                'description'=>'',
                'writer'=>'',
                'type'=>'',
                'language'=>'',
                'cover_img'=>'',
                'nb_pages'=>'',
                'size'=>'',
                'direct_link'=>'',
                'publised_date'=>''
            ],
            [
                'title'=>'',
                'description'=>'',
                'writer'=>'',
                'type'=>'',
                'language'=>'',
                'cover_img'=>'',
                'nb_pages'=>'',
                'size'=>'',
                'direct_link'=>'',
                'publised_date'=>''
            ]
        ]);
    }
}
