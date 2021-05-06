<?php

namespace App\Http\Controllers;

use App\Products;
use App\SpecialMonster;
use App\Monster;
use Validator;
use DB;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index(Products $products)
    {
        // View all the items
        $json = file_get_contents(storage_path('products-export.json'));
        $objs = json_decode($json,true);

        $breadcrumbs = [
            ['link'=>"dashboard-analytics",'name'=>"Home"], ['name'=>"Monster Manage"]
        ];

        $monsters = Monster::all();

        return view('/monster/monster-list', [
            'breadcrumbs' => $breadcrumbs,
            'products' => $objs['products'],
            'monsters' => $monsters
        ]);
    }

    public function edit_monster(Request $request)
    {
        $id = $request->id;
        $monster = Monster::where('id', $id)->first();
        if($monster->special_monster == 1) {
            $monster = DB::table('monsters')
                        ->leftJoin('special_monsters', 'monsters.special_monster_id', '=', 'special_monsters.id')
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
            $s_main_image = 'm_'.time().'.'.$request->s_main_image->extension();  
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
        $og_imageName = 'o_'.time().'.'.$request->og_image->extension();  
        $request->og_image->move(public_path('images/game/og_images'), $og_imageName);

        $main_imageName = 'm_'.time().'.'.$request->main_image->extension();  
        $request->main_image->move(public_path('images/game/main_images'), $main_imageName);

        $bg_imageName = 'b_'.time().'.'.$request->bg_image->extension();  
        $request->bg_image->move(public_path('images/game/bg_images'), $bg_imageName);

        $bg_comp_imageName = 'bc_'.time().'.'.$request->bg_comp_image->extension();  
        $request->bg_comp_image->move(public_path('images/game/bc_images'), $bg_comp_imageName);

        $icon_imageName = 'i_'.time().'.'.$request->icon_image->extension();  
        $request->icon_image->move(public_path('images/game/icon_images'), $icon_imageName);

        $skill_stone1_image = 'm_'.time().'.'.$request->skill_stone1_image->extension();  
        $request->skill_stone1_image->move(public_path('images/game/skill_images'), $skill_stone1_image);

        $skill_stone2_image = 'm_'.time().'.'.$request->skill_stone2_image->extension();  
        $request->skill_stone2_image->move(public_path('images/game/skill_images'), $skill_stone2_image);

        $skill_stone3_image = 'm_'.time().'.'.$request->skill_stone3_image->extension();  
        $request->skill_stone3_image->move(public_path('images/game/skill_images'), $skill_stone3_image);
        

        $monster_info['main_image'] = $main_imageName;
        $monster_info['icon_image'] = $icon_imageName;
        $monster_info['og_image'] = $og_imageName;
        $monster_info['bg_image'] = $bg_imageName;
        $monster_info['bg_comp_image'] = $bg_comp_imageName;
        $monster_info['skill_stone1_image'] = $skill_stone1_image;
        $monster_info['skill_stone2_image'] = $skill_stone2_image;
        $monster_info['skill_stone3_image'] = $skill_stone3_image;

        $monster = Monster::create($monster_info);
        if($request->special_monster == 1) {
            $monster->special_monster_id = $special_monster->id;
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

            $main_imageName = 'i_'.time().'.'.$request->main_image->extension();  
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

            $icon_imageName = 'i_'.time().'.'.$request->icon_image->extension();  
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

            $og_imageName = 'i_'.time().'.'.$request->og_image->extension();  
            $request->og_image->move(public_path('images/game/og_images'), $og_imageName);
            $monster_info['og_image'] = $og_imageName;
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

            $bg_imageName = 'i_'.time().'.'.$request->bg_image->extension();  
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

            $bg_comp_img_name = 'i_'.time().'.'.$request->bg_comp_image->extension();  
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

            $skill_stone1_image = 'i_'.time().'.'.$request->skill_stone1_image->extension();  
            $request->skill_stone1_image->move(public_path('images/game/bc_images'), $skill_stone1_image);
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

            $skill_stone2_image = 'i_'.time().'.'.$request->skill_stone2_image->extension();  
            $request->skill_stone2_image->move(public_path('images/game/bc_images'), $skill_stone2_image);
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

            $skill_stone3_image = 'i_'.time().'.'.$request->skill_stone3_image->extension();  
            $request->skill_stone3_image->move(public_path('images/game/bc_images'), $skill_stone3_image);
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
            if(!$monster->first()->special_monster) {
                $rules = [
                    's_main_image' => 'image|mimes:jpeg,png,jpg,gif'
                ];
    
                $validator = Validator::make($request->all(), $rules);
        
                if ($validator->fails()) {
                    return back()->with('error', "The special main image field must be image");
                }

                $s_main_image = 'm_'.time().'.'.$request->s_main_image->extension();  
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

                $monster->first()->special_monster_id = $special_monster->id;
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

                    $s_main_image = 'm_'.time().'.'.$request->s_main_image->extension();  
                    $request->s_main_image->move(public_path('images/game/special_images'), $s_main_image);

                    $special_monster = SpecialMonster::where('id', $monster->first()->special_monster_id)->update([
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
                    $special_monster = SpecialMonster::where('id', $monster->first()->special_monster_id)->update([
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
            SpecialMonster::where('id', $monster->first()->special_monster_id)->delete();
        }

        $monster->update($monster_info);

        return redirect()->back()->with('success',"You have successfully updated!");
    }

    public function delete_monster(Request $request)
    {
        $monster = Monster::where('id', $request->id);
        if($monster->first()->special_monster == 1) {
            SpecialMonster::where('id', $monster->first()->special_monster_id)->delete();
        }
        $monster->delete();

        return response()->json(true);
    }

}
