<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\TeamComp;
use App\Runeset;
use App\User;

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

        $user = User::where('id', $request->id)->first();
        $team_comps = TeamComp::where('c_sent_by_user', $request->id)->paginate(5);
        $rune_sets = Runeset::where('rs_user_id', $request->id)->paginate(3);

        if($request->ajax() && $request->team_comps) {
            return view('frontend.ajax-comps-pagination', compact('team_comps', 'user'));
        } else if($request->ajax() && $request->rune_set) {
            return view('frontend.ajax-user-runeset-pagination', compact('rune_sets', 'user'));
        }

        return view('frontend.user-public', compact('team_comps', 'rune_sets', 'user'));
    }

    public function setting_language(Request $request)
    {

        $lang = $request->lang;
        Session::put('lang', $lang);
        App::setlocale($lang);

        return redirect()->route('index', $lang);
    }
}
