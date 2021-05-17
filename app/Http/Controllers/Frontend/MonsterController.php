<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Monster;
use App\Runeset;
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
            'fr_name',
            'mana_cost',
            'role',
            'rarity',
            'element',
            'main_image',
        ]);
        
        return view('frontend.monster-list', compact('monsters'));
    }

    public function monster_detail(Request $request)
    {
        $id = $request->id;
        $monster = Monster::where('id', $id)->first();
        $rune_sets = Runeset::where('rs_monster_id', $monster->id)->paginate(3);
        $team_comps = TeamComp::whereRaw("JSON_CONTAINS(c_position,".$monster->id.",'$')=1")->paginate(5);

        if($monster->special_monster) {
            return view('frontend.monster-special', compact('monster', 'rune_sets', 'team_comps'));
        } else {
            return view('frontend.monster-detail', compact('monster', 'rune_sets', 'team_comps'));    
        }
    }

    public function get_monster(Request $request)
    {
        $monster_id = $request->monster_id;
        $monster = Monster::where('id', $monster_id)->first(['id', 'name', 'fr_name', 'main_image', 'element', 'role', 'rarity', 'mana_cost']);

        return view('frontend.ajax-monster-item', ['monster' => $monster, 'drop_id' => $request->drop_id]);
    }

    public function get_spell(Request $request)
    {
        $spell_id = $request->spell_id;
        $spell = Spell::where('id', $spell_id)->first(['id', 'name', 'fr_name', 'main_image', 'mana_cost', 'icon_image']);

        return view('frontend.ajax-spell-item', ['spell' => $spell, 'drop_id' => $request->drop_id]);
    }

    public function comps_list()
    {
        $team_comps = TeamComp::paginate(10);
        return view('frontend.comps-listing', compact('team_comps'));
    }

    public function comps_detail(Request $request)
    {
        $id = $request->id;
        $team_comp = TeamComp::where('c_id', $id)->first();
        $comments = TeamCompsComment::where('comment_comps_id', $id)->get();

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
        $user_id = Auth::user()->id;

        return view('frontend.add-rune-set', [
            'monster_id' => $monster_id,
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

    public function terms_of_use() 
    {
        return view('frontend.terms-of-use');
        // return view('frontend.terms-of-use-fr');
    }
}
