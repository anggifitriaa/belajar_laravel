<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title'=>'Tips cepat nikah', 'content'=>'lorem ipsum'],
            ['title'=>'haruskah menunda nikah', 'content'=>'lorem ipsum'],
            ['title'=>'membangun visi misi keluarga', 'content'=>'lorem ipsum'],
        ];
        // masukan data ke database
        DB::table('posts')->insert($post);
    }
}
