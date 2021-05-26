<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\UserInfo;
use Hash;

class UserPagesController extends Controller
{
    // User List Page
    public function user_list(){
      $breadcrumbs = [
          ['link'=>"/",'name'=>"Home"], ['name'=>"User Manage"]
      ];
      return view('/user/app-user-list', [
          'breadcrumbs' => $breadcrumbs,
          'user_management' => true
      ]);
    }

    // User View Page
    public function user_view(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Pages"], ['name'=>"User View"]
      ];
      return view('/pages/app-user-view', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    // User Edit Page
    public function user_edit(){
      $breadcrumbs = [
          ['link'=>"dashboard-analytics",'name'=>"Home"], ['link'=>"dashboard-analytics",'name'=>"Pages"], ['name'=>"User Edit"]
      ];
      return view('/pages/app-user-edit', [
          'breadcrumbs' => $breadcrumbs
      ]);
    }

    public function get_users()
    {
        $user = User::where('role', 0)->where('del_flag', 0)->get();

        return $user;
    }

    public function edit_user(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::where('id', $user_id)->first();
        $user_info = UserInfo::where('user_id', $user_id)->first();
        $user_management = true;

        return view('user.edit-user', compact('user', 'user_info', 'user_management'));
    }

    public function create_user(Request $request)
    {
        $input = $request->all();
        $user = User::create($input);

        return redirect()->back();
    }

    public function update_account(Request $request)
    {
        $user = User::where('id', $request->id);
        $input = $request->all();
        if(!$request->password) {
            unset($input['password']);
        } else {
            $input['password'] = Hash::make($request->password);
        }
        $user->update($input);

        return response()->json(true);
    }

    public function update_information(Request $request)
    {
        $user = UserInfo::where('user_id', $request->user_id);
        $input = $request->all();
        if($user->first()) {
            $user->update($input);
        } else {
            $user->create($input);
        }

        return response()->json(true);
    }

    public function update_social(Request $request)
    {
        $user = UserInfo::where('user_id', $request->user_id);
        $input = $request->all();
        if($user->first()) {
            $user->update($input);
        } else {
            $user->create($input);
        }

        return response()->json(true);
    }

    public function delete_user(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::where('id', $user_id)->first();
        $user->del_flag = 1;
        $user->save();

        return response()->json(true);
    }

}
