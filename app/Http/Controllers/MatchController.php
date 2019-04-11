<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class MatchController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
      }

      public function match(){

        //$goodMatch=Match::all();
        //return view('match')->with('goodMatch',$goodMatch);
        // for /parcourir la liste des matchs, et a chaque match chercher et ajouter sa compo
        $match=DB::table('selection')
              ->join('match', 'match.id', '=' , 'selection.match_id')
              ->join('player', 'player.id', '=' ,'selection.player_id')
              ->select('match.created_at','match.adversaire','player.nom','match.scoreBabet','match.scoreAdv', 'match.date')
              ->get();
            //  return $match;
              return view('match')->with('match', $match);

        $compo=DB::table('match')


      }

}
