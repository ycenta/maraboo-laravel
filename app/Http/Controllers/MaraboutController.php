<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marabout;

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
        return view('welcome', compact('marabouts'));

    }

    public function createMarabout(Request $request)
    {
        // Message::where('id','!=',1)->get();

        $marabout = Marabout::create([
            'name' => $request->maraboutname,
            'activity_begin_date' => $request->activity_begin_date,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'mail'=>$request->mail,
            'picture_url'=>'url_du_cul'
        ]);

        return redirect()->route('profilmarabout',['id'=>$marabout->id]);



        // $message2 = new Message;
        // $message2->body = $request->message;
        // $message2->save();
    }

    public function update(Request $request, Marabout $marabout)
    {
        $marabout->update([
            'name' => $request->name,
        ]);

        // return redirect()->route('messages.show', ['message' => $message]);
        return redirect()->route('profilmarabout',['id'=>$marabout->id]);
    }

    public function profileMarabout(Request $request, $id)
    {
        $marabout = Marabout::where('id','=',$id)->first();

        return view('profile-marabout', compact('marabout'));
    }
}
