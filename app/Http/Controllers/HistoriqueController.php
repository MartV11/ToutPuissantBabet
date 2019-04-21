<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Historique;

class HistoriqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function histo(){

      
      return view('historique');

  }
}
