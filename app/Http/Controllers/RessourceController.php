<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Carbon\Traits\Date;
use App\Models\Ressource;
use Illuminate\Http\Request;
use App\Models\Relations_ressources;

class RessourceController extends Controller
{
     


    public function index(Ressource $ressources)
    {
       
        $ressources->with('relations')->get();   

        return view('ressources', 
        [ 
            'ressources'    => Ressource::all(),
            'cats'          => Cat::all() 
         ]);
    }
 
     public function show($locale,$id)
    { 
        
        return view('ressource', [
            'ressource' => Ressource::where('id', $id)->firstOrFail()             
        ]);
        
    }
 
    
}
