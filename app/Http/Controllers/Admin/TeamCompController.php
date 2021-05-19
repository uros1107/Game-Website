<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\RuneSet;
use App\Role;
use App\Rune;
use App\SubStats;
use App\SkillStone;
use App\TeamComp;
use App\Monster;

class TeamCompController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"], ['name'=>"Team Comp Manage"]
        ];

        $team_comps = TeamComp::orderBy('created_at', 'desc')->get();

        return view('/team_comp/team-comp-list', [
            'breadcrumbs' => $breadcrumbs,
            'team_comps' => $team_comps
        ]);
    }

    public function edit_team_comp(Request $request)
    {
        $id = $request->c_id;
        $team_comp = TeamComp::where('c_id', $id)->first();

        return view('team_comp/edit-team-comp', compact('team_comp'));
    }

    public function add_team_comp()
    {
        $runes = Rune::all();
        $sub_stats = SubStats::all();
        $skill_stones = SkillStone::all();

        return view('team_comp/add-team-comp', [
            'runes' => $runes,
            'sub_stats' => $sub_stats,
            'skill_stones' => $skill_stones,
        ]);
    }

    public function store_team_comp(Request $request)
    {
        $spell_info = $request->all();

        $spell = Spell::create($spell_info);

        return redirect()->back()->with('success',"You have successfully added new Spell!");
    }

    public function update_team_comp(Request $request)
    {
        $positions = $request->c_position;
        for ($i=0; $i < count($positions); $i++) { 
            $first = $positions[$i];
            for ($j=$i+1; $j < count($positions); $j++) { 
                $second = $positions[$j];
                if($first == $second) {
                    return redirect()->back()->with('error',"You should select different monsters each other in a team comp!");
                }
            }
        }

        $spells = $request->c_spell;
        for ($i=0; $i < count($spells)-1; $i++) { 
            $first = $spells[$i];
            for ($j=$i+1; $j < count($spells); $j++) { 
                $second = $spells[$j];
                if($first == $second) {
                    return redirect()->back()->with('error',"You should select different spells each other in spell!");
                }
            }
        }
        
        $teamcomp = TeamComp::where('c_id', $request->c_id);
        $teamcomp_info = $request->all();

        $c_position = $teamcomp_info['c_position'];
        for ($i=0; $i < count($c_position); $i++) { 
            $c_position[$i] = intval($c_position[$i]);
        }
        $teamcomp_info['c_position'] = json_encode($c_position);

        $c_spell = $teamcomp_info['c_spell'];
        for ($i=0; $i < count($c_spell); $i++) { 
            $c_spell[$i] = intval($c_spell[$i]);
        }
        $teamcomp_info['c_spell'] = json_encode($c_spell);
        
        unset($teamcomp_info['_token']);
        
        $teamcomp->update($teamcomp_info);

        $c_monster_ids = $teamcomp->first()->c_position;
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
        foreach(json_decode($c_monster_ids) as $c_monster_id) {
            $monster = Monster::where('id', $c_monster_id)->first();
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
                default:
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
                default:
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
                default:
                    break;
            }
        }
        $comp_character['average_mana_cost'] = $comp_character['average_mana_cost'] / count(json_decode($c_monster_ids));
        
        $teamcomp->update($comp_character);

        return redirect()->back()->with('success',"You have successfully validated A comp!");
    }

    public function delete_team_comp(Request $request)
    {
        $teamcomp = TeamComp::where('c_id', $request->c_id)->delete();

        return response()->json(true);
    }
}
