<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallerie;

class GallerieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function gallerie(){

      // $images='img/*.{jpg,jpeg,gif,png}';

    	$gallery=Gallerie::all();
      
      return view('gallerie')->with('gallery', $gallery);
     

  }
}
