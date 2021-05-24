<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'team_comps_comments';  

    protected $fillable = [
        'comment_id',
        'comment_comps_id',
        'comment_user_id',
        'comment_text'
    ];
}
