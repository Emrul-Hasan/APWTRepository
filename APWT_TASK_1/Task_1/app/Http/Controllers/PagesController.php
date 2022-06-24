<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');

    }

    public function products(){
        $products=array("The Routledge History of Literature in English.", "King Lear- William Shakespeare.","The Tempest- William Shakespeare.", "Canonization- John Donne.","Death be not proud- John Donne.");
          return view('products')
         ->with('products', $products);;
        
        //return $products;
    }

    public function teams(){
        $teams=array("Mahmudul Hasan Joy", "Litton Das", "Mehidy Hasan","Khaled Ahmed");
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
