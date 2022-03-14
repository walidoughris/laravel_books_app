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
                'title'=>'عجائب الدنيا السبع',
                'description'=>'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .',
                'writer'=>'اوغريس وليد',
                'user_id'=>'1',
                'type'=>'رواية',
                'language'=>'العربية',
                'cover_img'=>'storage/images/books_covers/e10baa3f003c7bc7ab57286f2ab887b4@2x.png',
                'nb_pages'=>'128',
                'size'=>'126',
                'direct_link'=>true,
                'publised_date'=>'2020-02-20 22:19:10'
            ],
            [
                'title'=>'الثنين الصغير',
                'description'=>'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .',
                'writer'=>'توماس اديسون',
                'user_id'=>'1',
                'type'=>'رواية',
                'language'=>'الانجليزية',
                'cover_img'=>'storage/images/books_covers/cb5438a7f1752aeef23dbbe0468db7d4@2x.png',
                'nb_pages'=>'320',
                'size'=>'223',
                'direct_link'=>false,
                'publised_date'=>'2021-03-06 22:19:10'
            ]
        ]);
    }
}
