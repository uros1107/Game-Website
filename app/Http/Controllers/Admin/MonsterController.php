<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Products;
use App\SpecialMonster;
use App\Monster;
use App\RuneSet;
use Validator;
use DB;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index(Products $products)
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"], ['name'=>"Monster Manage"]
        ];

        $monsters = Monster::where('del_flag', 0)->get();

        return view('/monster/monster-list', [
            'breadcrumbs' => $breadcrumbs,
            'monsters' => $monsters
        ]);
    }

    public function edit_monster(Request $request)
    {
        $id = $request->id;
        $monster = Monster::where('id', $id)->first();
        if($monster->special_monster == 1) {
            $monster = DB::table('monsters')
                        ->where('id', $monster->id)
                        ->leftJoin('special_monsters', 'monsters.special_monster_id', '=', 'special_monsters.s_id')
                        ->first();
        }
        return view('monster/edit-monster', compact('monster'));
    }

    public function add_monster()
    {
        return view('monster/add-monster');
    }

    public function store_monster(Request $request)
    {
        $monster_info = $request->all();
        
        if($request->special_monster == 1) {
            $rules = [
                'main_image' => 'image|mimes:jpeg,png,jpg,gif',
                'icon_image' => 'image|mimes:jpeg,png,jpg,gif',
                'og_image' => 'image|mimes:jpeg,png,jpg,gif',
                'fr_og_image' => 'image|mimes:jpeg,png,jpg,gif',
                'bg_image' => 'image|mimes:jpeg,png,jpg,gif',
                'bg_comp_image' => 'image|mimes:jpeg,png,jpg,gif',
                'skill_stone1_image' => 'image|mimes:jpeg,png,jpg,gif',
                'skill_stone2_image' => 'image|mimes:jpeg,png,jpg,gif',
                'skill_stone3_image' => 'image|mimes:jpeg,png,jpg,gif',
                's_main_image' => 'image|mimes:jpeg,png,jpg,gif'
            ];
        } else {
            $rules = [
                'main_image' => 'image|mimes:jpeg,png,jpg,gif',
                'icon_image' => 'image|mimes:jpeg,png,jpg,gif',
                'og_image' => 'image|mimes:jpeg,png,jpg,gif',
                'fr_og_image' => 'image|mimes:jpeg,png,jpg,gif',
                'bg_image' => 'image|mimes:jpeg,png,jpg,gif',
                'bg_comp_image' => 'image|mimes:jpeg,png,jpg,gif',
                'skill_stone1_image' => 'image|mimes:jpeg,png,jpg,gif',
                'skill_stone2_image' => 'image|mimes:jpeg,png,jpg,gif',
                'skill_stone3_image' => 'image|mimes:jpeg,png,jpg,gif'
            ];
        }
        
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            return back()->with('error', "The image field must be image");
        }

        unset(
            $monster_info['s_name'], 
            $monster_info['fr_s_name'], 
            $monster_info['s_second_name'], 
            $monster_info['fr_s_second_name'], 
            $monster_info['s_spell_name'],
            $monster_info['fr_s_spell_name'],
            $monster_info['s_spell_description'],
            $monster_info['fr_s_spell_description'],
            $monster_info['s_main_image'],
            $monster_info['s_crit_rate'],
            $monster_info['s_crit_dmg'],
            $monster_info['s_hp'],
            $monster_info['s_atk'],
            $monster_info['s_acc'],
            $monster_info['s_def'],
            $monster_info['s_res'],
            $monster_info['s_mana_cost']
        );

        if($request->special_monster == 1) {
            $s_main_image = $request->s_main_image->getClientOriginalName();
            $request->s_main_image->move(public_path('images/game/special_images'), $s_main_image);        

            $special_monster = SpecialMonster::create([
                's_name' => $request->s_name,
                'fr_s_name' => $request->fr_s_name,
                's_second_name' => $request->s_second_name,
                'fr_s_second_name' => $request->fr_s_second_name,
                's_spell_name' => $request->s_spell_name,
                'fr_s_spell_name' => $request->fr_s_spell_name,
                's_spell_description' => $request->s_spell_description,
                'fr_s_spell_description' => $request->fr_s_spell_description,
                's_main_image' => $s_main_image,
                's_crit_rate' => $request->s_crit_rate,
                's_crit_dmg' => $request->s_crit_dmg,
                's_hp' => $request->s_hp,
                's_atk' => $request->s_atk,
                's_acc' => $request->s_acc,
                's_def' => $request->s_def,
                's_res' => $request->s_res,
                's_mana_cost' => $request->s_mana_cost,
            ]);
        }

        $og_imageName = $request->og_image->getClientOriginalName();
        $request->og_image->move(public_path('images/game/og_images'), $og_imageName);

        $fr_og_imageName = $request->fr_og_image->getClientOriginalName();
        $request->og_image->move(public_path('images/game/og_images'), $fr_og_imageName);

        $main_imageName = $request->main_image->getClientOriginalName();
        $request->main_image->move(public_path('images/game/main_images'), $main_imageName);

        $bg_imageName = $request->bg_image->getClientOriginalName();
        $request->bg_image->move(public_path('images/game/bg_images'), $bg_imageName);

        $bg_comp_imageName = $request->bg_comp_image->getClientOriginalName(); 
        $request->bg_comp_image->move(public_path('images/game/bc_images'), $bg_comp_imageName);

        $icon_imageName = $request->icon_image->getClientOriginalName();
        $request->icon_image->move(public_path('images/game/icon_images'), $icon_imageName);

        $skill_stone1_image = $request->skill_stone1_image->getClientOriginalName();
        $request->skill_stone1_image->move(public_path('images/game/skill_images'), $skill_stone1_image);
  
        $skill_stone2_image = $request->skill_stone2_image->getClientOriginalName();
        $request->skill_stone2_image->move(public_path('images/game/skill_images'), $skill_stone2_image);

        $skill_stone3_image = $request->skill_stone3_image->getClientOriginalName();
        $request->skill_stone3_image->move(public_path('images/game/skill_images'), $skill_stone3_image);
        

        $monster_info['main_image'] = $main_imageName;
        $monster_info['icon_image'] = $icon_imageName;
        $monster_info['og_image'] = $og_imageName;
        $monster_info['fr_og_image'] = $fr_og_image;
        $monster_info['bg_image'] = $bg_imageName;
        $monster_info['bg_comp_image'] = $bg_comp_imageName;
        $monster_info['skill_stone1_image'] = $skill_stone1_image;
        $monster_info['skill_stone2_image'] = $skill_stone2_image;
        $monster_info['skill_stone3_image'] = $skill_stone3_image;

        $monster_info['slug'] = str_slug($monster_info['name'],'-');
        $monster_info['fr_slug'] = str_slug($monster_info['fr_name'],'-');

        $monster = Monster::create($monster_info);
        if($request->special_monster == 1) {
            $monster->special_monster_id = $special_monster->s_id;
            $monster->save();
        }

        return redirect()->back()->with('success',"You have successfully added new Monster!");
    }

    public function update_monster(Request $request)
    {
        $monster_info = $request->all();
        $monster = Monster::where('id', $request->id);

        if(!$request->main_image) {
            unset($monster_info['main_image']);
        } else {
            $rules = [
                'main_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The main image field must be image");
            }

            $main_imageName = $request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('images/game/main_images'), $main_imageName);
            $monster_info['main_image'] = $main_imageName;
        }

        if(!$request->icon_image) {
            unset($monster_info['icon_image']);
        } else {
            $rules = [
                'icon_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The icon image field must be image");
            }

            $icon_imageName = $request->icon_image->getClientOriginalName();
            $request->icon_image->move(public_path('images/game/icon_images'), $icon_imageName);
            $monster_info['icon_image'] = $icon_imageName;
        }

        if(!$request->og_image) {
            unset($monster_info['og_image']);
        } else {
            $rules = [
                'og_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The og image field must be image");
            }
  
            $og_imageName = $request->og_image->getClientOriginalName();
            $request->og_image->move(public_path('images/game/og_images'), $og_imageName);
            $monster_info['og_image'] = $og_imageName;
        }

        if(!$request->fr_og_image) {
            unset($monster_info['fr_og_image']);
        } else {
            $rules = [
                'fr_og_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The og image field must be image");
            }
  
            $fr_og_imageName = $request->fr_og_image->getClientOriginalName();
            $request->fr_og_image->move(public_path('images/game/og_images'), $fr_og_imageName);
            $monster_info['fr_og_image'] = $fr_og_imageName;
        }

        if(!$request->bg_image) {
            unset($monster_info['bg_image']);
        } else {
            $rules = [
                'bg_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The bg image field must be image");
            }

            $bg_imageName = $request->bg_image->getClientOriginalName();
            $request->bg_image->move(public_path('images/game/bg_images'), $bg_imageName);
            $monster_info['bg_image'] = $bg_imageName;
        }

        if(!$request->bg_comp_image) {
            unset($monster_info['bg_comp_image']);
        } else {
            $rules = [
                'bg_comp_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The bg comp image field must be image");
            }
 
            $bg_comp_img_name = $request->bg_comp_image->getClientOriginalName();
            $request->bg_comp_image->move(public_path('images/game/bc_images'), $bg_comp_img_name);
            $monster_info['bg_comp_image'] = $bg_comp_img_name;
        }

        if(!$request->skill_stone1_image) {
            unset($monster_info['skill_stone1_image']);
        } else {
            $rules = [
                'skill_stone1_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The skill stone 1 image field must be image");
            }

            $skill_stone1_image = $request->skill_stone1_image->getClientOriginalName();
            $request->skill_stone1_image->move(public_path('images/game/skill_images'), $skill_stone1_image);
            $monster_info['skill_stone1_image'] = $skill_stone1_image;
        }

        if(!$request->skill_stone2_image) {
            unset($monster_info['skill_stone2_image']);
        } else {
            $rules = [
                'skill_stone2_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The skill stone 1 image field must be image");
            }

            $skill_stone2_image = $request->skill_stone2_image->getClientOriginalName();
            $request->skill_stone2_image->move(public_path('images/game/skill_images'), $skill_stone2_image);
            $monster_info['skill_stone2_image'] = $skill_stone2_image;
        }

        if(!$request->skill_stone3_image) {
            unset($monster_info['skill_stone3_image']);
        } else {
            $rules = [
                'skill_stone3_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The skill stone 1 image field must be image");
            }
  
            $skill_stone3_image = $request->skill_stone3_image->getClientOriginalName();
            $request->skill_stone3_image->move(public_path('images/game/skill_images'), $skill_stone3_image);
            $monster_info['skill_stone3_image'] = $skill_stone3_image;
        }

        unset(
            $monster_info['_token'],
            $monster_info['s_name'], 
            $monster_info['fr_s_name'], 
            $monster_info['s_second_name'], 
            $monster_info['fr_s_second_name'], 
            $monster_info['s_spell_name'],
            $monster_info['fr_s_spell_name'],
            $monster_info['s_spell_description'],
            $monster_info['fr_s_spell_description'],
            $monster_info['s_main_image'],
            $monster_info['s_crit_rate'],
            $monster_info['s_crit_dmg'],
            $monster_info['s_hp'],
            $monster_info['s_atk'],
            $monster_info['s_acc'],
            $monster_info['s_def'],
            $monster_info['s_res'],
            $monster_info['s_mana_cost']
        );

        if($request->special_monster == 1) {
            if(!$monster->first()->special_monster_id) {
                $rules = [
                    's_main_image' => 'image|mimes:jpeg,png,jpg,gif'
                ];
    
                $validator = Validator::make($request->all(), $rules);
        
                if ($validator->fails()) {
                    return back()->with('error', "The special main image field must be image");
                }
 
                $s_main_image = $request->s_main_image->getClientOriginalName();
                $request->s_main_image->move(public_path('images/game/special_images'), $s_main_image);  

                $special_monster = SpecialMonster::create([
                    's_name' => $request->s_name,
                    'fr_s_name' => $request->fr_s_name,
                    's_second_name' => $request->s_second_name,
                    'fr_s_second_name' => $request->fr_s_second_name,
                    's_spell_name' => $request->s_spell_name,
                    'fr_s_spell_name' => $request->fr_s_spell_name,
                    's_spell_description' => $request->s_spell_description,
                    'fr_s_spell_description' => $request->fr_s_spell_description,
                    's_main_image' => $s_main_image,
                    's_crit_rate' => $request->s_crit_rate,
                    's_crit_dmg' => $request->s_crit_dmg,
                    's_hp' => $request->s_hp,
                    's_atk' => $request->s_atk,
                    's_acc' => $request->s_acc,
                    's_def' => $request->s_def,
                    's_res' => $request->s_res,
                    's_mana_cost' => $request->s_mana_cost,
                ]);

                $monster->first()->special_monster_id = $special_monster->s_id;
                $monster->first()->save();
            } else {
                if($request->s_main_image) {
                    $rules = [
                        's_main_image' => 'image|mimes:jpeg,png,jpg,gif'
                    ];
        
                    $validator = Validator::make($request->all(), $rules);
            
                    if ($validator->fails()) {
                        return back()->with('error', "The special main image field must be image");
                    }

                    $s_main_image = $request->s_main_image->getClientOriginalName();
                    $request->s_main_image->move(public_path('images/game/special_images'), $s_main_image);

                    $special_monster = SpecialMonster::where('s_id', $monster->first()->special_monster_id)->update([
                        's_name' => $request->s_name,
                        'fr_s_name' => $request->fr_s_name,
                        's_second_name' => $request->s_second_name,
                        'fr_s_second_name' => $request->fr_s_second_name,
                        's_spell_name' => $request->s_spell_name,
                        'fr_s_spell_name' => $request->fr_s_spell_name,
                        's_spell_description' => $request->s_spell_description,
                        'fr_s_spell_description' => $request->fr_s_spell_description,
                        's_main_image' => $s_main_image,
                        's_crit_rate' => $request->s_crit_rate,
                        's_crit_dmg' => $request->s_crit_dmg,
                        's_hp' => $request->s_hp,
                        's_atk' => $request->s_atk,
                        's_acc' => $request->s_acc,
                        's_def' => $request->s_def,
                        's_res' => $request->s_res,
                        's_mana_cost' => $request->s_mana_cost,
                    ]);
                } else {
                    $special_monster = SpecialMonster::where('s_id', $monster->first()->special_monster_id)->update([
                        's_name' => $request->s_name,
                        'fr_s_name' => $request->fr_s_name,
                        's_second_name' => $request->s_second_name,
                        'fr_s_second_name' => $request->fr_s_second_name,
                        's_spell_name' => $request->s_spell_name,
                        'fr_s_spell_name' => $request->fr_s_spell_name,
                        's_spell_description' => $request->s_spell_description,
                        'fr_s_spell_description' => $request->fr_s_spell_description,
                        's_crit_rate' => $request->s_crit_rate,
                        's_crit_dmg' => $request->s_crit_dmg,
                        's_hp' => $request->s_hp,
                        's_atk' => $request->s_atk,
                        's_acc' => $request->s_acc,
                        's_def' => $request->s_def,
                        's_res' => $request->s_res,
                        's_mana_cost' => $request->s_mana_cost,
                    ]);
                }
            }
        } elseif($request->special_monster == 0 && $monster->first()->special_monster == 1) {
            SpecialMonster::where('s_id', $monster->first()->special_monster_id)->delete();
        }

        $monster_info['slug'] = str_slug($monster_info['name'],'-');
        $monster_info['fr_slug'] = str_slug($monster_info['fr_name'],'-');
        $monster->update($monster_info);

        return redirect()->back()->with('success',"You have successfully updated!");
    }

    public function delete_monster(Request $request)
    {
        $monster = Monster::where('id', $request->id)->first();
        // if($monster->first()->special_monster == 1) {
        //     SpecialMonster::where('s_id', $monster->first()->special_monster_id)->delete();
        // }
        $monster->del_flag = 1;
        $monster->save();

        return response()->json(true);
    }

}
