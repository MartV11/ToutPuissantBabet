<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateursController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function createur()
  {
      return view('createurs');
  }
}
