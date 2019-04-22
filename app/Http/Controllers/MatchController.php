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

        //selectionne toutes les lignes de la table match et les mets dans 'matchs'
        $matchs=DB::table('match')->get();
    //initialise un tableau vide 'compo'
      $compos=[];

  //pour chaque match qui existe dans '$matchs' on va exécuter le code ci dessous
  foreach ($matchs as $match) {

      //on récupère l'id du match en cours
    $id=$match->id;

    //on sélectionne tous les joueurs (de la table selection) qui correspondent à l'id du match
    $joueurs=DB::table('selection')->where('match_id', $id)->get();

    //initialise un tableau vide 'players'
    $players=[];

    //pour chaque joueur qui existe dans '$joueurs'
    foreach ($joueurs as $joueur) {
        //on recupère les infos de la table 'player' qui correspondent à l'id du joueur
      $playername=DB::table('player')->where('id',$joueur->player_id)->get();
      //on met dans le tableau $players, le résultat de la requete --> le tableau contiendra donc les infos de tous les joueurs présents pour un match donné 
      array_push($players,$playername);
    }
    //on met dans le tableau $compo le tableau $players --> le tableau contiendra donc des tableaux contenant les infos de tous les joueurs pour chaque match.
    array_push($compos,$players);
  }

   //on retourne la liste des matchs et les compos associées
  return view('match')->with('matchs', $matchs)->with('compos', $compos);

//requete compo qui marche !!!!!!
////SELECT DISTINCT selection.player_id , player.nom FROM  `selection`INNER JOIN player ON selection.player_id = player.id WHERE selection.match_id = 2;///



      }

}
