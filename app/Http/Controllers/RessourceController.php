<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use Illuminate\Http\Request;
use App\Models\Relations_ressources;

class RessourceController extends Controller
{
    // public function index()
    // {  
    //     $ressource->with('categories')->get();
    //     return view('ressources', compact('ressource'));
    //     // return view('ressources' , [ 
    //     //    'ressources' => Ressource::all(),
    //     //    'ressource_rel' => Relations_ressources::all()
    //     // ]);       
    //  }

    public function index(Ressource $ressources)
    {
       // $ressources = Ressource::all();
       // $ressources->with('categories')->get();
      ///  dd($ressources);
        $ressources->with('relations')->get(); 
        return view('ressources', 
        [ 
         'ressources' => Ressource::all()]);
    }
}
