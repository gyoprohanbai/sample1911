<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    protected $fillable = [   // <---�@�ǉ�
        'user_id', 'tweet',
    ];
}
