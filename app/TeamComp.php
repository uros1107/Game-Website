<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamComp extends Model
{
    protected $fillable = [
        'c_id',
        'c_name',
        'c_fr_name',
        'c_general_info',
        'c_fr_general_info',
        'c_sent_by_user',
        'c_likes',
        'c_dislikes',
        'c_position',
        'c_spell',
        'c_verify'
    ];
}
