<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuneSet;
use App\Role;
use App\Rune;
use App\SubStats;
use App\SkillStone;
use App\TeamComp;

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
        for ($i=0; $i < count($positions)-1; $i++) { 
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
        unset($teamcomp_info['_token']);
        
        $teamcomp->update($teamcomp_info);

        return redirect()->back()->with('success',"You have successfully validated A comp!");
    }

    public function delete_team_comp(Request $request)
    {
        $teamcomp = TeamComp::where('c_id', $request->c_id)->delete();

        return response()->json(true);
    }
}
