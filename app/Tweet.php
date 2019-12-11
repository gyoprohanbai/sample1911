<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    protected $fillable = [   // <---@’Ç‰Á
        'user_id', 'tweet',
    ];
}
