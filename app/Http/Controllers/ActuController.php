<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actu;

class ActuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function actu(){

      $goodActu=Actu::all();

      return view('actu')->with('goodActu',$goodActu);
      

  }
}
