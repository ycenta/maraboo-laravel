<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Marabout;
use Auth;

class CommentController extends Controller
{


    public function createComment(Request $request)
    {

        $user_id = Auth::id();
        $marabout = Marabout::where('id','=',$request->marabout_id)->first();

        if ($user_id && $marabout) {
            $comment = Comment::create([
                "user_id"=>$user_id,
                "marabout_id"=>$request->marabout_id,
                "content"=>$request->content
            ]);

            return redirect()->route('profilmarabout',['marabout'=>$marabout]);
        } else {
            abort(403);
        }

    }

    public function delete(Request $request, Comment $comment)
    {

        $comment->delete();

    }
    public function showComments(Request $request)
    {
        $comments = Comment::get();
        return view('comments', compact('comments'));

    }

    /*public function update(Request $request, Comment $comment)
    {
        $comment->updat(["content"=>$reques->comment]);
    }*/

}
