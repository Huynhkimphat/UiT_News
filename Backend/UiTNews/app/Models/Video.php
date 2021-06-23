<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = "videos";

    protected $fillable = ['VIDEO_TITLE','VIDEO_FILE', 'VIDEO_DESCRIPTION', 'VIDEO_AUTHOR','VIDEO_ORIGIN','VIDEO_TYPE_ID','VIDEO_VIEW'];
}
