<?php

use Illuminate\Database\Seeder;

class PostCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_comments')->insert([
            'post_id' => '1',
            'post_comments_author' => '1',
            'post_comments_excerpt' => str_random(15),
            'post_comments_status' =>  'active'
        ]);
    }
}
