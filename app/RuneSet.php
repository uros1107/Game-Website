<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuneSet extends Model
{
    protected $fillable = [
        'rs_id',
        'rs_user_id',
        'rs_monster_id',
        'rs_name',
        'fr_rs_name',
        'rs_comment',
        'fr_rs_comment',
        'rs_rune',
        'rs_substats',
        'rs_skill_stones',
        'rs_comp_position',
        'verify'
    ];










}
