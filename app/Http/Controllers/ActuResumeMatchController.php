<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActuResumeMatchController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function resume()
  {
      return view('actuResumeMatch');
  }
}
