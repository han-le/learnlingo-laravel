<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getExcerpt() {
        //todo
    }

    //search
    public function filter() {

    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
