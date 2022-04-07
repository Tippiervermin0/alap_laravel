<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bejegyzes;

class BejegyzesController extends Controller
{
    public function index(){

        $bejegyzesek = response()->json(Bejegyzesek::with('tevekenysegek')->get());
        return $bejegyzesek;
    }

    public  function osztaly($id){

        $bejegyzesek = response()->json(Bejegyzesek::with('tevekenysegek')->where('osztalyokID', $id)->get());
        return $bejegyzesek;
    }

    public function store(Request $request){

        echo $request;
        $bejegyzesek = new Bejegyzesek();
        $bejegyzesek -> allapot = 0;
        $bejegyzesek -> tevekenysegID = $request->tevekenysegID;
        $bejegyzesek -> osztalyokID = $request->osztalyokID;

        $bejegyzesek->save();
        return Bejegyzesek::find($bejegyzesek->id);

    }
}
