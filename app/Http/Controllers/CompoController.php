<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function Comp()
  {
      return view('compo');
  }
}
