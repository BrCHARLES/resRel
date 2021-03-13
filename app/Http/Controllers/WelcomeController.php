<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Type;
use App\Models\User;
use App\Models\Color;  
use App\Models\Relation;
use App\Models\Ressource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){ 
       
        return view('welcome' , [ 
            'cats'          => Cat::all(),
            'types'         => Type::all(),
            'relations'     => Relation::all(),
            'ressources'    => Ressource::orderBy('ressource_date', 'asc')->limit(3)->get(),
            'users'         => User::all()
         ]);       
    }     
} 