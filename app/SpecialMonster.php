<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialMonster extends Model
{
    protected $fillable = [
        's_name',
        'fr_s_name',
        's_second_name',
        'fr_s_second_name',
        's_spell_name',
        'fr_s_spell_name',
        's_spell_description',
        'fr_s_spell_description',
        's_main_image',
        's_crit_rate',
        's_crit_dmg',
        's_hp',
        's_atk',
        's_acc',
        's_def',
        's_res',
        's_mana_cost'
    ];
}
