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
            ->select(DB::raw('count(goal.id) as nb_buts, player.id, player.nom, player.prenom'))
            ->groupBy('player.id')
            ->orderBy('nb_buts', 'desc')
            ->get();


    $selec = DB::table('selection')
            ->join('player','player.id', '=', 'selection.player_id')
            ->select(DB::raw('count(*) as nb_selec, player_id'))
            ->groupBy('player_id')
            ->get();


  //  SELECT player_id , COUNT(*) FROM `selection`GROUP BY player_id;

    foreach ($goal as $currentGoalLine) {

      $correspondingSelec = $this->findCorrespondingSelec($selec, $currentGoalLine->id);

      if ($correspondingSelec != null) {

        $currentGoalLine->nb_selec = $correspondingSelec->nb_selec;
      }
      else {
        $currentGoalLine->nb_selec = 'NA';
      }
    }

    return view('stat')->with('goal',$goal);
  }

  private function findCorrespondingSelec($selections, $idPlayer) {

    $result = null;

    foreach ($selections as $selection) {

      if ($selection->player_id == $idPlayer) {

        $result = $selection;

        break;
      }
    }

    return $result;
  }
}
