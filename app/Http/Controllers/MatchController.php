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
        $matchs=DB::table('match')->get();

             $compos=[];
             foreach ($matchs as $match) {
               $id=$match->id;
          $joueurs=DB::table('selection')->where('match_id', $id)->get();
            $players=[];
          foreach ($joueurs as $joueur) {

            $playername=DB::table('player')->where('id',$joueur->player_id)->get();
            array_push($players,$playername);
          }
            array_push($compos,$players);
         }
          //   return $compos;
           return view('match')->with('matchs', $matchs)->with('compos', $compos);

//requete compo qui marche !!!!!!
////SELECT DISTINCT selection.player_id , player.nom FROM  `selection`INNER JOIN player ON selection.player_id = player.id WHERE selection.match_id = 2;///



      }

}
