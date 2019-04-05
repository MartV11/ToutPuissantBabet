<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    $players=Player::where([
            ['prenom'],
            ['description'],
        ])->get();
        return $players;
       
	return view('equipe')->with('player', $players);
	}
}
