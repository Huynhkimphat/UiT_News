<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['COMMENT_BODY','USER_ID','COMMENT_POST_ID','COMMENT_PARENT_ID'];
    protected $primaryKey ='COMMENT_ID';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class,'USER_ID');
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'COMMENT_PARENT_ID','COMMENT_ID');
    }
}
