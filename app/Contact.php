<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // We do not have any updated_at or created_at field, so we need to make false that statement
    public $timestamps = false;
    protected $table = 'contact';
    protected $fillable = [
            'name', 'email', 'message',
    ];
}
