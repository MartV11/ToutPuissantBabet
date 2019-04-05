<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

class PlayerController extends Controller
{




  public function play(){

      $goodPlay=Player::all();
      // return $goodPlay;
      return view('equipe')->with('goodPlay',$goodPlay);
      //DB::$table(player)->select* etc....

  }
}
