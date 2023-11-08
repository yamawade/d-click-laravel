<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function getListeTache(){
        $tache=Tache::all();
        return view('tache.taches',compact('tache'));
    }

    public function show(Request $req){
        $tache=Tache::find($req->id);
        return view('tache.show',['tacheTrouver'=>$tache]);
    }
}
