<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Type;
use App\Models\Color;  
use App\Models\Relation;
use App\Models\Ressource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        
        // $users = User::limit(5)->get();

    //    $ressources = Ressource::with(['cats' => function($query) {
        
    //         }])->take(5)->get();

        return view('welcome' , [ 
            'cats'          => Cat::all(),
            'types'         => Type::all(),
            'relations'     => Relation::all(),
            'ressources'    => Ressource::all()
         ]);       
    }     
} 