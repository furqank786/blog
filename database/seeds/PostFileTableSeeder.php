<?php

use Illuminate\Database\Seeder;

class PostFileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_files')->insert([
            'post_id' => rand(1,10),
            'file_name' => str_random(15),
            'file_path' => str_random(15),
            'file_type' => 'jpg'
        ]);
    }
}
