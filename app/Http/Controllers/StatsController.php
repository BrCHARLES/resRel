<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index()
    {  
        // Retourne le nombre de commentaires par ressources
        

        return view('admin.statistiques' , [ 
           'cats' => Cat::all() 
        ]);       
    }
}
