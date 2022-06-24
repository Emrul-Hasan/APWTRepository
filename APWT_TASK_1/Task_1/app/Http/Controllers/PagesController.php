<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');

    }

    public function products(){
        $oishi=array("Bain Syrup", "Xfin","emrul", "Bactrocin","Xymet","Gastrocon-R","Gavisol");
          return view('products')
         ->with('emon', $oishi);;
        
        //return $products;
    }

    public function teams(){
        $teams=array("Mr.X", "Mr.Y", "Mr.Z");
        return view('teams')
        ->with('teams', $teams);
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUs(){
        return view('contactUs');
    }
}
