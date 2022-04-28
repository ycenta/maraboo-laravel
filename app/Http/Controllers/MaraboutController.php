<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marabout;
use App\Models\Comment;
use Auth;

class MaraboutController extends Controller
{
    public function show(Marabout $marabout)
    {
        return view('marabout', [
            'marabout' => $marabouts]);

    }

    public function showMarabouts(Request $request)
    {
        $marabouts = Marabout::paginate(32);
        return view('home', compact('marabouts'));

    }

    public function createMarabout(Request $request)
    {
        $id = Auth::id();

        // Message::where('id','!=',1)->get();

        if($id && $request->file('avatar')) {
            $file = $request->file('avatar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image'), $filename);


        $marabout = Marabout::create([
            'name' => $request->maraboutname,
            'activity_begin_date' => $request->activity_begin_date,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'mail'=>$request->mail,
            'resume'=>$request->resume,
            'user_id'=>$id,
            'picture_url'=>$filename,
        ]);
        
        return redirect()->route('profilmarabout',['id'=>$marabout->id]);
        } else {
            abort(403);
        }
    }

    public function update(Request $request, Marabout $marabout)
    {
        $marabout->update([
            'name' => $request->name,
        ]);

        // return redirect()->route('messages.show', ['message' => $message]);
        return redirect()->route('profilmarabout',['id'=>$marabout->id]);
    }

    public function delete(Request $request, Marabout $marabout)
    {
        $marabout->delete();

        // return redirect()->route('messages.show', ['message' => $message]);
        return redirect()->route('home');
    }

    public function profileMarabout(Request $request, $id)
    {
        $marabout = Marabout::where('id','=',$id)->first();
        $comments = Comment::where('marabout_id','=',$id)->get();

        return view('profile-marabout', compact('marabout', 'comments'));
    }
}
