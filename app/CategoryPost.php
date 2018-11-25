<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = "posts_categories";

    protected $fillable = [
        "name"
    ];

    public $timestamps = false;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_category', 'post_id', 'category_post_id');
    }
}
