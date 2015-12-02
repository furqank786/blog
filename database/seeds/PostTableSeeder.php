<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'post_author' => '1',
            'category_id' => '1',
            'post_date' => date('Y-m-d H:i:s'),
            'post_title' => 'post title',
            'post_excerpt' => 'registered',
            'post_status' => 'active',
            'post_type' => 'public'

        ]);
    }
}
