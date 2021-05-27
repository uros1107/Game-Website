<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    protected $fillable = [
        'name',
        'fr_name',
        'description',
        'fr_description',
        'mana_cost',
        'main_image',
        'icon_image',
        'del_flag'
    ];
}
