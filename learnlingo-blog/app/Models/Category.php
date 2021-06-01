<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function postsWithSameCategory() {
        //return a list of posts that have the same category
        return $this->hasMany(Post::class, 'category_id');
    }
}
