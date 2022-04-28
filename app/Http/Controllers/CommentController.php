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

            return redirect()->route('profilmarabout',['id'=>$marabout->id]);
        } else {
            abort(404);
        }
        
    }

    /*public function update(Request $request, Comment $comment)
    {
        $comment->updat(["content"=>$reques->comment]);
    }*/

}
