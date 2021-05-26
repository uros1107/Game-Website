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
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        Session::put('lang', $lang);
        App::setlocale(Session::get('lang'));

        return view('frontend.index');
    }

    public function private($lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        return view('frontend.user-private');
    }

    public function public(Request $request, $lang, $name)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        $user = User::where('name', $name)->first();
        $team_comps = TeamComp::where('c_sent_by_user', $user->id)->paginate(5);
        $rune_sets = Runeset::where('rs_user_id', $user->id)->paginate(3);

        if($request->ajax() && $request->team_comps) {
            return view('frontend.ajax-comps-pagination', compact('team_comps', 'user'));
        } else if($request->ajax() && $request->rune_set) {
            return view('frontend.ajax-user-runeset-pagination', compact('rune_sets', 'user'));
        }

        return view('frontend.user-public', compact('team_comps', 'rune_sets', 'user'));
    }

    public function setting_language(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        $lang = $request->lang;
        Session::put('lang', $lang);
        App::setlocale(Session::get('lang'));

        return redirect()->back();
    }
}
