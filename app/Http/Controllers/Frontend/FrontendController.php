<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\TeamComp;
use App\Runeset;

class FrontendController extends Controller
{
    public function __construct() {
    }
     
    // Dashboard - Analytics
    public function index($lang)
    {
        Session::put('lang', $lang);
        App::setlocale($lang);

        return view('frontend.index');
    }

    public function private()
    {
        App::setlocale(Session::get('lang'));

        return view('frontend.user-private');
    }

    public function public(Request $request, $lang)
    {
        App::setlocale(Session::get('lang'));

        $team_comps = TeamComp::where('c_sent_by_user', Auth::user()->id)->paginate(5);
        $rune_sets = Runeset::where('rs_user_id', Auth::user()->id)->paginate(3);

        if($request->ajax() && $request->team_comps) {
            return view('frontend.ajax-comps-pagination', compact('team_comps'));
        } else if($request->ajax() && $request->rune_set) {
            return view('frontend.ajax-user-runeset-pagination', compact('rune_sets'));
        }

        return view('frontend.user-public', compact('team_comps', 'rune_sets'));
    }

    public function setting_language(Request $request)
    {

        $lang = $request->lang;
        Session::put('lang', $lang);
        App::setlocale($lang);

        return redirect()->route('index', $lang);
    }
}
