<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

class PlayerController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }



  public function play(){

      $goodPlay=Player::all();
      // return $goodPlay;
      return view('equipe')->with('goodPlay',$goodPlay);
      //DB::$table(player)->select* etc....

  }
}
