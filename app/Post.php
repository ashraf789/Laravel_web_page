<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $timestamps = false;
    protected $fillable = [
            'title', 'article', 'user_id',
    ];
}
