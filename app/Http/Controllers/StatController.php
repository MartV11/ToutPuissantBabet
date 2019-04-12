<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stat;

class StatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function stat(){

      // $goal = DB::select('player_id,count(*) as nbbuts from goal group by player_id order by nbbuts desc')

    $goal = DB::table('goal')
            ->join('player', 'player.id', '=', 'goal.player_id')
            ->select(DB::raw('count(*) as nb_buts, player_id, nom, prenom'))
            ->groupBy('player_id')
            ->orderBy('nb_buts', 'desc')
            ->get();

            $selec = DB::table('selection')
                    ->join('player','player.id', '=', 'selection.player_id')
                    ->select(DB::raw('count(*) as nb_selec, player_id'))
                    ->groupBy('player_id')
                    ->get();


  //  SELECT player_id , COUNT(*) FROM `selection`GROUP BY player_id;


            return view('stat')->with('goal',$goal)->with('selec', $selec);




  }
}
