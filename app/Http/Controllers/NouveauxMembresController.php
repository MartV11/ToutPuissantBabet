<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NouveauxMembresController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function newMemb()
  {
      return view('nouveauxMembres');
  }
}
