<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
            $table->increments('id');
            $table->integer('post_author')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->dateTime('post_date');
            $table->string('post_excerpt');
            $table->string('post_title');
            $table->string('post_status');
            $table->string('post_type');
            $table->timestamps();
//            $table->foreign('post_author')->references('id')->on('users');
//            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
