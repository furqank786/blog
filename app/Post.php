<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// protected $table = 'posts';

    protected $fillable = [
        'post_title',
        'post_excerpt',
        'post_date'
    ];
}
