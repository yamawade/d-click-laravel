<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function getListeTache(){
        //$tache=Tache::all();
        $tache= Tache::orderBy('id','desc')->get();
        return view('tache.taches',compact('tache'));
    }

    public function create(){
        return view('tache.nouveau');
    }

    public function save(Request $req){
        $tache= new Tache();
        $tache->nom_tache = $req->nom;
        $tache->description_tache = $req->description;
        $tache->date_echeance = $req->date;
        $tache->priorite = $req->priorite;
        
        if($req->terminer){
            $tache->is_termine=1;
        }else{
            $tache->is_termine=0;
        }

        if($tache->save()){
            return redirect('/tache');
        }
    }

    public function show(Request $req){
        $tache=Tache::findOrFail($req->id);
        return view('tache.show',['tacheTrouver'=>$tache]);
    }

    public function terminer(Request $req){
        $tache=Tache::findOrFail($req->id_tache);
        $tache->is_termine=1;
        $tache->save();
        return back();
    }
}
