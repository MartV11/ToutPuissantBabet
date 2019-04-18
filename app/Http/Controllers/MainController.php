<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Main;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function main(){


    		$mainActu = DB::table('actu')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->offset(1)
            ->get();



            $grosseActu = DB::table('actu')
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();

    return view('main')
				->with('mainActu', $mainActu)
				->with('grosseActu', $grosseActu);
   
  }


//   public function new()
// {
//     $produits = Produit::where('nouveaute', 1)->get();

//     return view('nouveaute')->with('produits', $produits);
// }
}
