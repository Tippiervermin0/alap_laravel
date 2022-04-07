<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tevekenyseg;

class TevekenysegController extends Controller
{
   public function index(){
       $tevekenysegek = response()->json(Tevekenysegek::all());
       return $tevekenysegek;
   }
}
