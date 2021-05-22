<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamComp extends Model
{
    protected $fillable = [
        'c_id',
        'c_name',
        'c_slug',
        'c_fr_slug',
        'c_fr_name',
        'c_general_info',
        'c_fr_general_info',
        'c_sent_by_user',
        'c_likes',
        'c_dislikes',
        'c_position',
        'c_spell',
        'c_verify',
        'element_fire',
        'element_water',
        'element_wind',
        'element_light',
        'element_dark',
        'role_atk',
        'role_hp',
        'role_support',
        'role_defense',
        'rarity_normal',
        'rarity_rare',
        'rarity_hero',
        'rarity_legend',
        'average_mana_cost',
    ];
}
