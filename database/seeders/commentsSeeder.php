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
                'user_id'=>'1',
                'book_id'=>'1',
                'comment'=>'أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .',
                'added_date'=>'2020-12-13 20:20:19'
            ],
            [
                'user_id'=>'2',
                'book_id'=>'1',
                'comment'=>'أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .',
                'added_date'=>'2021-01-03 20:20:19'
            ]
        ]);
    }
}
