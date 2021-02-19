<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Type;
use App\Models\Color; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        
        return view('welcome' , [ 
            'cats' => Cat::all(),
            'types' => Type::all()
         ]);       

    //     $type = DB::table('types');
        
    //     $colors = DB::table('colors')->get()->pluck('rgba'); 
    
    //     $categories = DB::table('cats')->get();
    //     dd($categories) ;
    //   //  $nom = $categories->pluck('name');
        
    //     $nom = 'name_' . config('app.locale'); 
       

    //     return view('welcome', [                 
    //         'categories'    => $categories ,
    //         'color'         => $color
    //     ]);
    } 

    
} 