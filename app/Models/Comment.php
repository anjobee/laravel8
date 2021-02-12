<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // laravel will convert the method name to snake case
    // blog_post then suffix it with _id => blog_post_id
    public function blogPost()
    {
        // return $this->belongsTo('App\Models\BlogPost', 'post_id', 'blog_post_id');
        return $this->belongsTo('App\Models\BlogPost');
    }
}
