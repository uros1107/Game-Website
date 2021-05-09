<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spell;
use App\RuneSet;
use App\Rune;
use App\SubStats;
use App\SkillStone;

class RuneSetController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"], ['name'=>"Rune Set Manage"]
        ];

        $rune_sets = RuneSet::all();

        return view('/rune_sets/rune-set-list', [
            'breadcrumbs' => $breadcrumbs,
            'rune_sets' => $rune_sets
        ]);
    }

    public function edit_rune_set(Request $request)
    {
        $id = $request->id;
        $rune_set = RuneSet::where('rs_id', $id)->first();
        $runes = Rune::all();
        $sub_stats = SubStats::all();
        $skill_stones = SkillStone::all();
        return view('rune_sets/edit-rune-sets', compact('rune_set', 'runes', 'sub_stats', 'skill_stones'));
    }

    public function add_rune_set()
    {
        $runes = Rune::all();
        $sub_stats = SubStats::all();
        $skill_stones = SkillStone::all();

        return view('rune_sets/add-rune-sets', [
            'runes' => $runes,
            'sub_stats' => $sub_stats,
            'skill_stones' => $skill_stones,
        ]);
    }

    public function store_rune_set(Request $request)
    {
        $spell_info = $request->all();

        $spell = Spell::create($spell_info);

        return redirect()->back()->with('success',"You have successfully added new Spell!");
    }

    public function update_rune_set(Request $request)
    {
        $runeset = RuneSet::where('rs_id', $request->rs_id);
        $runeset_info = $request->all();
        unset($runeset_info['_token']);
        
        $runeset->update($runeset_info);

        return redirect()->back()->with('success',"You have successfully validated runeset!");
    }

    public function delete_rune_set(Request $request)
    {
        $runeset = RuneSet::where('rs_id', $request->rs_id)->delete();

        return response()->json(true);
    }
}
