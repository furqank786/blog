<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_comments', function (Blueprint $table){
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('post_comments_author');
            $table->string('post_comments_excerpt');
            $table->string('post_comments_status');
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_comments');
    }
}
