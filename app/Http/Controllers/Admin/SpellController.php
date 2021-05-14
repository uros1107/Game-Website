<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Products;
use App\Spell;
use Illuminate\Http\Request;
use Validator;

class SpellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Products $products)
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"], ['name'=>"Spell Manage"]
        ];

        $spells = Spell::all();

        return view('/spell/spell-list', [
            'breadcrumbs' => $breadcrumbs,
            'spells' => $spells
        ]);
    }
    
    public function edit_spell(Request $request)
    {
        $id = $request->id;
        $spell = Spell::where('id', $id)->first();
        return view('spell/edit-spell', compact('spell'));
    }

    public function add_spell()
    {
        return view('spell/add-spell');
    }

    public function store_spell(Request $request)
    {
        $spell_info = $request->all();
        
        $rules = [
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'icon_image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
        $validator = Validator::make($request->all(), $rules);
  
        if ($validator->fails()) {
            return back()->with('error', "The image field must be image");
        }
        $main_imageName = $request->main_image->getClientOriginalName();  
        $request->main_image->move(public_path('images/game/main_images'), $main_imageName);

        $icon_imageName = $request->icon_image->getClientOriginalName();  
        $request->icon_image->move(public_path('images/game/icon_images'), $icon_imageName);

        $spell_info['main_image'] = $main_imageName;
        $spell_info['icon_image'] = $icon_imageName;
        $spell = Spell::create($spell_info);

        return redirect()->back()->with('success',"You have successfully added new Spell!");
    }

    public function update_spell(Request $request)
    {
        $spell = Spell::where('id', $request->id)->first();
        $spell_info = $request->all();
        
        if(!$request->main_image) {
            unset($spell_info['main_image']);
        } else {
            $rules = [
                'main_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The main image field must be image");
            }

            $main_imageName = $request->main_image->getClientOriginalName();
            $request->main_image->move(public_path('images/game/main_images'), $main_imageName);
            $spell_info['main_image'] = $main_imageName;
        }

        if(!$request->icon_image) {
            unset($spell_info['icon_image']);
        } else {
            $rules = [
                'icon_image' => 'image|mimes:jpeg,png,jpg,gif',
            ];
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return back()->with('error', "The icon image field must be image");
            }
  
            $icon_imageName = $request->icon_image->getClientOriginalName();
            $request->icon_image->move(public_path('images/game/icon_images'), $icon_imageName);
            $spell_info['icon_image'] = $icon_imageName;
        }
        
        $spell->update($spell_info);

        return redirect()->back()->with('success',"You have successfully updated spell!");
    }

    public function delete_spell(Request $request)
    {
        $spell = Spell::where('id', $request->id)->delete();

        return response()->json(true);
    }
}
