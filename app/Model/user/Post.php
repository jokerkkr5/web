<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title', 'subtitle', 'slug', 'body', 'status', 'image', 'posted_by', 'like', 'dislike'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Model\user\Tag', 'post_tags');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Model\user\Category', 'categoy_posts');
    }
}
