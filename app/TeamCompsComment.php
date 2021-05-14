<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamCompsComment extends Model
{
    protected $fillable = [
        'comment_id',
        'comment_comps_id',
        'comment_text',
        'comment_user_id'
    ];
}
