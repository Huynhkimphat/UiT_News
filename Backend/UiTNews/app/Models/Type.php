<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Type extends Model
{
    protected $table = "types";
    protected $primaryKey = "id";
    protected $guarded = [];
    public $timestamps = true;

    //   /**
    //    * Get all of the comments for the Type
    //    *
    //    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //    */
    public function post()
    {
        return $this->hasMany(Post::class, 'POST_TYPE_ID', 'id');
    }
}
