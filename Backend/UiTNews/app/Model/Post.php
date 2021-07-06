<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Type;

class Post extends Model
{
    protected $table="posts";
    protected $primaryKey="id";
    protected $guarded = [];
    public $timestamps=true;

    public function types()
    {
        return $this->belongsTo(Type::class, 'POST_TYPE_ID', 'id');
    }
    
}
