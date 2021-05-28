<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Monster;
use App\RuneSet;
use App\TeamComp;
use App\Spell;
use App\User;
use App\TeamCompsComment;

class SitemapController extends Controller
{
    public function index($lang)
    {
        $monsters = Monster::where('del_flag', 0)->get();
        $rune_sets = RuneSet::where('verify', 1)->get();
        $team_comps = TeamComp::where('c_verify', 1)->get();
        $users = User::where('role', 0)->where('del_flag', 0)->get();

        if($lang == 'en') {
            return response()->view('frontend.sitemap.en-index', [
                'monsters' => $monsters,
                'rune_sets' => $rune_sets,
                'team_comps' => $team_comps,
                'users' => $users,
            ])->header('Content-Type', 'text/xml');
        } else {
            return response()->view('frontend.sitemap.fr-index', [
                'monsters' => $monsters,
                'rune_sets' => $rune_sets,
                'team_comps' => $team_comps,
                'users' => $users,
            ])->header('Content-Type', 'text/xml');
        }
    }
}
