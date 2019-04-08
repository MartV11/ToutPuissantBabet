<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stat;

class StatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function stat(){

      $goal = DB::select('player_id,count(*) as nbbuts from goal group by player_id order by nbbuts desc')

  }
}
