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
        return view('marabouts', compact('marabouts'));

    }

    public function createMarabout(Request $request)
    {
        # code...
        // Message::where('id','!=',1)->get();
        $marabout = Marabout::create([
            'name' => $request->name
        ]);
            //ect

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
}
