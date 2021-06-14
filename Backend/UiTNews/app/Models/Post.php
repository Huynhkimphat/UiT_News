<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function comments(){ 
        return $this->hasMany(Comment::class,'COMMENT_POST_ID')->whereNull('COMMENT_PARENT_ID');
    }
}
