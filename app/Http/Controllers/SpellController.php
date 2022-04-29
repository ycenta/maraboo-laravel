<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marabout;
use App\Models\Spell;


class SpellController extends Controller
{
    public function show(Spell $spell)
    {
        return view('spell', [
            'spell' => $spell]);

    }

    public function showSpells(Request $request)
    {
        $spells = Spell::get();
        return view('spells', compact('spells'));

    }

    public function createSpell(Request $request)
    {
        
        $spell = Spell::create([
            'name' => $request->spellname          
        ]);

        return redirect()->route('profilmarabout',['marabout'=>$marabout]);



        // $message2 = new Message;
        // $message2->body = $request->message;
        // $message2->save();
    }
    

    public function delete(Request $request, Spell $spell)
    {
        $spell->delete();

        // return redirect()->route('messages.show', ['message' => $message]);
        return redirect()->route('home');
    }


    public function update(Request $request, Spell $spell)
    {
        $spell->update([
            'name' => $request->spellname,
        ]);

        // return redirect()->route('messages.show', ['message' => $message]);
        return redirect()->route('spelllist',['spell'=>$spell]);
    }



}