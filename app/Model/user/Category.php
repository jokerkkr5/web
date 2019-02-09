<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function posts()
    {
    	return $this->belongsToMany('App\Model\user\Post', 'categoy_posts');
    }
}
