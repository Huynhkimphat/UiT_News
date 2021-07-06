<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'POST_TITLE',
        'POST_CONTENT',
        'POST_AUTHOR_NAME',
        'POST_ORIGIN',
        'POST_TYPE_ID',
        'POST_IMAGE',
        'POST_VIEW',
    ];
}
