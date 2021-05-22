<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    protected $fillable = [
        'name',
        'fr_name',
        'slug',
        'fr_slug',
        'second_name',
        'fr_second_name',
        'spell_name',
        'fr_spell_name',
        'spell_description',
        'fr_spell_description',
        'mana_cost',
        'role',
        'rarity',
        'element',
        'crit_rate',
        'crit_dmg',
        'hp',
        'atk',
        'acc',
        'def',
        'res',
        'meta_title',
        'fr_meta_title',
        'meta_description',
        'fr_meta_desciption',
        'og_image',
        'main_image',
        'bg_image',
        'bg_comp_image',
        'icon_image',
        'special_monster',
        'special_monster_id',
        'skill_stone1_name',
        'fr_skill_stone1_name',
        'skill_stone1_description',
        'fr_skill_stone1_description',
        'skill_stone1_image',
        'skill_stone2_name',
        'fr_skill_stone2_name',
        'skill_stone2_description',
        'fr_skill_stone2_description',
        'skill_stone2_image',
        'skill_stone3_name',
        'fr_skill_stone3_name',
        'skill_stone3_description',
        'fr_skill_stone3_description',
        'skill_stone3_image',
        'del_flag'
    ];
}
