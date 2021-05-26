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
use App;
use Session;
use Share;

class MonsterController extends Controller
{
    public function __construct() 
    {
        // App::setlocale(Session::get('lang'));
    }
    public function monster_list(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        $monsters = Monster::where('del_flag', 0)->paginate(15, [
            'id', 
            'name', 
            'slug', 
            'fr_slug', 
            'fr_name',
            'mana_cost',
            'role',
            'rarity',
            'element',
            'main_image',
            'meta_title',
            'fr_meta_title',
            'og_image',
            'fr_og_image',
            'meta_description',
            'fr_meta_description',
            'bg_image',
            'bg_comp_image',
            'icon_image'
        ]);
        App::setlocale(Session::get('lang'));
        
        if($request->ajax()) {
            return view('frontend.filter.filter-monster', compact('monsters'));
        } else {
            return view('frontend.monster-list', compact('monsters'));
        }
    }

    public function monster_detail(Request $request, $lang, $slug)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        if($lang == 'en') {
            $monster = Monster::where('slug', $slug)->first();
        } else {
            $monster = Monster::where('fr_slug', $slug)->first();
        }
        
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

    public function get_monster(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        $monster_id = $request->monster_id;
        $monster = Monster::where('id', $monster_id)->first(['id', 'name', 'fr_name', 'slug', 'fr_slug', 'main_image', 'element', 'role', 'rarity', 'mana_cost', 'meta_title', 'fr_meta_title', 'og_image', 'fr_og_image', 'meta_description', 'fr_meta_description', 'bg_image', 'bg_comp_image', 'icon_image']);

        return view('frontend.ajax-monster-item', ['monster' => $monster, 'drop_id' => $request->drop_id]);
    }

    public function calculate_character(Request $request, $lang) 
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

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
    }

    public function get_spell(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        $spell_id = $request->spell_id;
        $spell = Spell::where('id', $spell_id)->first(['id', 'name', 'fr_name', 'main_image', 'mana_cost', 'icon_image']);

        return view('frontend.ajax-spell-item', ['spell' => $spell, 'drop_id' => $request->drop_id]);
    }

    public function comps_list(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));
        $team_comps = TeamComp::where('c_verify', 1)->paginate(10);

        if($request->ajax()) {
            return view('frontend.filter.filter-team-comps', compact('team_comps'));
        } else {
            return view('frontend.comps-listing', compact('team_comps'));
        }
    }

    public function comps_detail(Request $request, $lang, $slug)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        if(Session::get('lang') == 'en') {
            $team_comp = TeamComp::where('c_slug', $slug)->first();
        } else {
            $team_comp = TeamComp::where('c_fr_slug', $slug)->first();
        }
        
        $comments = TeamCompsComment::where('comment_comps_id', $team_comp->c_id)->get();

        $slug = Session::get('lang') == 'en' ? $team_comp->c_slug : $team_comp->c_fr_slug;
        $url = 'https://lostcenturia.gg/'.Session::get('lang').'/comps-detail/'.$slug;
        $facebook = 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($url);
        $twitter = 'https://twitter.com/intent/tweet?url='.urlencode($url);
        $reddit = 'https://www.reddit.com/submit?url='.urlencode($url);
        $social = [
            'facebook' => $facebook,
            'twitter' => $twitter,
            'reddit' => $reddit,
        ];

        return view('frontend.comps-detail', compact('team_comp', 'comments', 'social'));
    }

    public function comps_submit(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

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
        $comps_info['c_fr_name'] = $comps_info['c_name'];
        $comps_info['c_slug'] = str_slug($comps_info['c_name'],'-').'-'.strtolower(str_random(4));
        $comps_info['c_fr_slug'] = str_slug($comps_info['c_name'],'-').'-'.strtolower(str_random(4));
        
        $comps_info = TeamComp::create($comps_info);

        return response()->json(true);
    }

    public function comps_comment(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

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

    public function add_comps_likes(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        $c_id = $request->c_id;
        $comps = TeamComp::where('c_id', $c_id);
        $comps->update([
            'c_likes' => $comps->first()->c_likes + 1
        ]);

        return response()->json(['c_likes' => $comps->first()->c_likes]);
    }

    public function add_comps_dislikes(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        $c_id = $request->c_id;
        $comps = TeamComp::where('c_id', $c_id);
        $comps->update([
            'c_dislikes' => $comps->first()->c_dislikes + 1
        ]);

        return response()->json(['c_dislikes' => $comps->first()->c_dislikes]);
    }

    public function comps_builder($lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        $monsters = Monster::where('del_flag', 0)->get([
            'id', 
            'name', 
            'fr_name', 
            'slug', 
            'fr_slug',
            'icon_image', 
            'rarity',
            'meta_title',
            'fr_meta_title',
            'og_image',
            'fr_og_image',
            'meta_description',
            'fr_meta_description',
            'bg_image',
            'bg_comp_image',
        ]);
        return view('frontend.comps-builder', compact('monsters'));
    }

    public function add_rune_set(Request $request, $lang, $slug)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        if(Session::get('lang') == 'en') {
            $monster = Monster::where('slug', $slug)->first();
        } else {
            $monster = Monster::where('fr_slug', $slug)->first();
        }
        
        $user_id = Auth::user()->id;

        return view('frontend.add-rune-set', [
            'monster' => $monster,
            'user_id' => $user_id
        ]);
    }

    public function store_rune_set(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        $rune_set = $request->all();
        $rune_set['rs_substats'] = json_encode($rune_set['rs_substats']);

        if(Session::get('lang') == 'fr') {
            $rune_set['fr_rs_comment'] = $rune_set['rs_comment'];
            unset($rune_set['rs_comment']);
        }
        $rune_set_info = Runeset::create($rune_set);

        return response()->json(true);
    }

    public function search(Request $request, $lang)
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        App::setlocale(Session::get('lang'));

        $search = $request->search;

        if(Session::get('lang') == 'en') {
            $monster = Monster::where('name', 'like', '%'.$search.'%')->where('del_flag', 0)->first();
        } else {
            $monster = Monster::where('fr_name', 'like', '%'.$search.'%')->where('del_flag', 0)->first();
        }
        
        if($monster) {
            $redirect_url = route(Session::get('lang') == 'en' ? 'monster-detail' : 'fr-monster-detail', [Session::get('lang'), Session::get('lang') == 'en' ? $monster->slug : $monster->fr_slug]);
            return response()->json(['success' => true, 'redirect_url' => $redirect_url]);
        } else {
            return response()->json(['success' => false]);
        }
        
    }

    public function terms_of_use($lang) 
    {
        if($lang != 'en' && $lang != 'fr') {
            return view('errors.error-404');
        }
        if(Session::get('lang') == 'en') {
            return view('frontend.terms-of-use');
        } else {
            return view('frontend.terms-of-use-fr');
        }
    }
}
