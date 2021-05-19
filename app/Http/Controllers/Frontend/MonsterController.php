<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Monster;
use App\RuneSet;
use App\TeamComp;
use App\Spell;
use App\TeamCompsComment;
use Auth;

class MonsterController extends Controller
{
    public function monster_list()
    {
        $monsters = Monster::paginate(15, [
            'id', 
            'name', 
            'slug', 
            'fr_name',
            'mana_cost',
            'role',
            'rarity',
            'element',
            'main_image',
        ]);
        
        return view('frontend.monster-list', compact('monsters'));
    }

    public function monster_detail(Request $request, $slug)
    {
        $monster = Monster::where('slug', $slug)->first();
        $rune_sets = Runeset::where('rs_monster_id', $monster->id)->where('verify', 1)->paginate(3);
        $team_comps = TeamComp::whereRaw("JSON_CONTAINS(c_position,'".$monster->id."','$')=1")->where('c_verify', 1)->paginate(5);

        if($request->ajax() && $request->team_comps) {
            return view('frontend.ajax-comps-pagination', compact('team_comps'));
        } else if($request->ajax() && $request->rune_set) {
            return view('frontend.ajax-runeset-pagination', compact('rune_sets', 'monster'));
        }

        if($monster->special_monster) {
            return view('frontend.monster-special', compact('monster', 'rune_sets', 'team_comps'));
        } else {
            return view('frontend.monster-detail', compact('monster', 'rune_sets', 'team_comps'));    
        }
    }

    public function get_monster(Request $request)
    {
        $monster_id = $request->monster_id;
        $monster = Monster::where('id', $monster_id)->first(['id', 'name', 'fr_name', 'slug', 'main_image', 'element', 'role', 'rarity', 'mana_cost']);

        return view('frontend.ajax-monster-item', ['monster' => $monster, 'drop_id' => $request->drop_id]);
    }

    public function calculate_character(Request $request) 
    {
        $monster_ids = $request->monster_ids;
        
        $comp_character = array(
            'element_fire' => 0,
            'element_water' => 0,
            'element_wind' => 0,
            'element_light' => 0,
            'element_dark' => 0,
            'role_atk' => 0,
            'role_hp' => 0,
            'role_support' => 0,
            'role_defense' => 0,
            'rarity_normal' => 0,
            'rarity_rare' => 0,
            'rarity_hero' => 0,
            'rarity_legend' => 0,
            'average_mana_cost' => 0
        );
        foreach($monster_ids as $monster_id) {
            $monster = Monster::where('id', $monster_id)->first();
            $comp_character['average_mana_cost'] += $monster->mana_cost;
            switch ($monster->element) {
                case 1:
                    $comp_character['element_fire']++;
                    break;
                case 2:
                    $comp_character['element_water']++;
                    break;
                case 3:
                    $comp_character['element_wind']++;
                    break;
                case 4:
                    $comp_character['element_light']++;
                    break;
                case 5:
                    $comp_character['element_dark']++;
                    break;
            }
            switch ($monster->role) {
                case 1:
                    $comp_character['role_atk']++;
                    break;
                case 2:
                    $comp_character['role_hp']++;
                    break;
                case 3:
                    $comp_character['role_support']++;
                    break;
                case 4:
                    $comp_character['role_defense']++;
                    break;
            }
            switch ($monster->rarity) {
                case 1:
                    $comp_character['rarity_normal']++;
                    break;
                case 2:
                    $comp_character['rarity_rare']++;
                    break;
                case 3:
                    $comp_character['rarity_hero']++;
                    break;
                case 4:
                    $comp_character['rarity_legend']++;
                    break;
            }
        }
        $comp_character['average_mana_cost'] = round($comp_character['average_mana_cost'] / count($monster_ids), 1);

        return view('frontend.ajax-character', ['comp_character' => $comp_character]);
        // return $comp_character;
    }

    public function get_spell(Request $request)
    {
        $spell_id = $request->spell_id;
        $spell = Spell::where('id', $spell_id)->first(['id', 'name', 'fr_name', 'main_image', 'mana_cost', 'icon_image']);

        return view('frontend.ajax-spell-item', ['spell' => $spell, 'drop_id' => $request->drop_id]);
    }

    public function comps_list()
    {
        $team_comps = TeamComp::where('c_verify', 1)->paginate(10);
        return view('frontend.comps-listing', compact('team_comps'));
    }

    public function comps_detail(Request $request, $slug)
    {
        $team_comp = TeamComp::where('c_slug', $slug)->first();
        $comments = TeamCompsComment::where('comment_comps_id', $team_comp->id)->get();

        return view('frontend.comps-detail', compact('team_comp', 'comments'));
    }

    public function comps_submit(Request $request)
    {
        $comps_info = $request->all();
        $c_position = $comps_info['c_position'];
        for ($i=0; $i < count($c_position); $i++) { 
            $c_position[$i] = intval($c_position[$i]);
        }
        $comps_info['c_position'] = json_encode($c_position);

        $c_spell = $comps_info['c_spell'];
        for ($i=0; $i < count($c_spell); $i++) { 
            $c_spell[$i] = intval($c_spell[$i]);
        }
        $comps_info['c_spell'] = json_encode($c_spell);

        $comps_info['c_sent_by_user'] = Auth::user()->id;
        $comps_info['c_slug'] = str_slug($comps_info['c_name'],'-').'-'.strtolower(str_random(8));
        
        $comps_info = TeamComp::create($comps_info);

        return response()->json(true);
    }

    public function comps_comment(Request $request)
    {
        $c_id = $request->c_id;
        $comment = $request->comment;

        $new_commet = new TeamCompsComment;
        $new_commet->comment_comps_id = $c_id;
        $new_commet->comment_text = $comment;
        $new_commet->comment_user_id = Auth::user()->id;
        $new_commet->save();

        if($new_commet->save()) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function comps_builder()
    {
        return view('frontend.comps-builder');
    }

    public function add_rune_set(Request $request)
    {
        $monster_id = $request->monster_id;
        $monster = Monster::where('id', $monster_id)->first();
        $user_id = Auth::user()->id;

        return view('frontend.add-rune-set', [
            'monster' => $monster,
            'user_id' => $user_id
        ]);
    }

    public function store_rune_set(Request $request)
    {
        $rune_set = $request->all();
        $rune_set['rs_substats'] = json_encode($rune_set['rs_substats']);
        $rune_set_info = Runeset::create($rune_set);

        return response()->json(true);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $monster = Monster::where('name', 'like', '%'.$search.'%')->first();
        if($monster) {
            $redirect_url = route('monster-detail', $monster->slug);
            return response()->json(['success' => true, 'redirect_url' => $redirect_url]);
        } else {
            return response()->json(['success' => false]);
        }
        
    }

    public function terms_of_use() 
    {
        return view('frontend.terms-of-use');
        // return view('frontend.terms-of-use-fr');
    }
}
