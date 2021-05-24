<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RuneSet;
use App\Role;
use App\Rune;
use App\SubStats;
use App\SkillStone;
use App\TeamComp;
use App\Monster;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"], ['name'=>"Comment Manage"]
        ];

        $comments = Comment::orderBy('created_at', 'desc')->get();

        return view('/comment/comment-list', [
            'breadcrumbs' => $breadcrumbs,
            'comments' => $comments
        ]);
    }

    public function edit_comment(Request $request)
    {
        $id = $request->id;
        $comment = Comment::where('comment_id', $id)->first();

        return view('comment/edit-comment', compact('comment'));
    }

    public function update_comment(Request $request)
    {
        $comment_id = $request->comment_id;
        $comment_info = $request->all();
        unset($comment_info['_token']);
        $comment = Comment::where('comment_id', $comment_id)->update($comment_info);

        return redirect()->back()->with('success',"You have successfully updated!");
    }

    public function delete_comment(Request $request)
    {
        $teamcomp = Comment::where('comment_id', $request->id)->delete();

        return response()->json(true);
    }
}
