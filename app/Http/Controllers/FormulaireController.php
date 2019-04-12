<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaireController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function form()
  {
      return view('formulaire');
  }
}
