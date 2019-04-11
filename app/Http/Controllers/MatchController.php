<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Match;

class MatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function match(){

      

    $match = DB::table('selection')
            ->join('player', 'player.id', '=', 'goal.player_id')
            ->select(DB::raw('count(*) as nb_buts, player_id, nom, prenom'))
            ->groupBy('player_id')
            ->orderBy('nb_buts', 'desc')
            ->get();

return view('match')->with('match',$match);

  }
}
