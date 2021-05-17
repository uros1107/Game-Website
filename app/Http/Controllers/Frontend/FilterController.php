<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Monster;
use DB;

class FilterController extends Controller
{
    public function get_monster(Request $request)
    {
        $mana_cost = $request->mana_cost;
        $element = $request->element;
        $role = $request->role;
        $rarity = $request->rarity;

        $monsters = Monster::when($mana_cost, function($query, $mana_cost){
                                $query->where('mana_cost', '>=', $mana_cost[1])->where('mana_cost', '<=', $mana_cost[3]);
                            })
                            ->when($element, function($query, $element){
                                $query->where(function($q) use ($element) {
                                    foreach ($element as $key => $item) {
                                        if($key == 0) {
                                            $q->where('element', $item);
                                        } else {
                                            $q->orWhere('element', $item);
                                        }
                                    }
                                });
                            })
                            ->when($role, function($query, $role){
                                $query->where(function($q) use ($role) {
                                    foreach ($role as $key => $item) {
                                        if($key == 0) {
                                            $q->where('role', $item);
                                        } else {
                                            $q->orWhere('role', $item);
                                        }
                                    }
                                });
                            })
                            ->when($rarity, function($query, $rarity){
                                $query->where(function($q) use ($rarity) {
                                    foreach ($rarity as $key => $item) {
                                        if($key == 0) {
                                            $q->where('rarity', $item);
                                        } else {
                                            $q->orWhere('rarity', $item);
                                        }
                                    }
                                });
                            })
                            ->paginate(5, [
                                'id', 
                                'name', 
                                'fr_name',
                                'mana_cost',
                                'role',
                                'rarity',
                                'element',
                                'main_image',
                            ]);

        return view('frontend.filter.filter-monster', compact('monsters'));
    }

    public function get_builder_monster(Request $request)
    {
        $mana_cost1 = $request->mana_cost1;
        $mana_cost2 = $request->mana_cost2;
        $monster = $request->monster;
        $element = $request->element;
        $role = $request->role;
        $rarity = $request->rarity;

        $mana_cost = [$mana_cost1, $mana_cost2];
        $monsters = Monster::when($mana_cost, function($query, $mana_cost){
                                $query->where('mana_cost', '>=', $mana_cost[0])->where('mana_cost', '<=', $mana_cost[1]);
                            })
                            ->when($monster, function($query, $monster){
                                $query->where(function($q) use ($monster) {
                                    foreach ($monster as $key => $item) {
                                        if($key == 0) {
                                            $q->where('id', $item);
                                        } else {
                                            $q->orWhere('id', $item);
                                        }
                                    }
                                });
                            })
                            ->when($element, function($query, $element){
                                $query->where(function($q) use ($element) {
                                    foreach ($element as $key => $item) {
                                        if($key == 0) {
                                            $q->where('element', $item);
                                        } else {
                                            $q->orWhere('element', $item);
                                        }
                                    }
                                });
                            })
                            ->when($role, function($query, $role){
                                $query->where(function($q) use ($role) {
                                    foreach ($role as $key => $item) {
                                        if($key == 0) {
                                            $q->where('role', $item);
                                        } else {
                                            $q->orWhere('role', $item);
                                        }
                                    }
                                });
                            })
                            ->when($rarity, function($query, $rarity){
                                $query->where(function($q) use ($rarity) {
                                    foreach ($rarity as $key => $item) {
                                        if($key == 0) {
                                            $q->where('rarity', $item);
                                        } else {
                                            $q->orWhere('rarity', $item);
                                        }
                                    }
                                });
                            })->get(['id', 'name', 'fr_name', 'icon_image']);

        return view('frontend.filter.filter-builder-monster', compact('monsters'));
    }

    public function get_team_comps(Request $request)
    {
        $mana_cost = $request->mana_cost;
        $monster = $request->monster;
        $element = $request->element;
        $sort = $request->sort;

        $mana_cost = substr($mana_cost, 1, -1);
        $mana_cost = explode(',', $mana_cost);

        $query = DB::table('team_comps');
        if($mana_cost) {
            $query->where('average_mana_cost', '>=', $mana_cost[0])->where('average_mana_cost', '<=', $mana_cost[1]);       
        }
        if($element) {
            $query->where(function($q) use ($element) {
                foreach ($element as $key => $item) {
                    if($item == 1) {
                        $q->where('element_fire', '<>', '0');
                    }
                    if($item == 2) {
                        $q->where('element_water', '<>', '0');
                    }
                    if($item == 3) {
                        $q->where('element_wind', '<>', '0');
                    }
                    if($item == 4) {
                        $q->where('element_light', '<>', '0');
                    }
                    if($item == 5) {
                        $q->where('element_dark', '<>', '0');
                    }
                }
            });
        }
        if($monster) {
            $query->where(function($q) use ($monster) {
                foreach ($monster as $key => $item) {
                    $q->whereRaw("JSON_CONTAINS(c_position,".$item.",'$')=1");
                }
            });
        }
        if($sort) {
            $query->orderBy('created_at', 'desc');
        } else {
            $query->orderBy('c_likes', 'desc');
        }
        $team_comps = $query->paginate(10);

        return view('frontend.filter.filter-team-comps', compact('team_comps'));
    }
}
