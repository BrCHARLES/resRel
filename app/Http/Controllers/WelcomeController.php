<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){

        $type = DB::table('types');
        
        $categories = DB::table('categories')->get(); 
        $nom = $categories->pluck('name');
        
        $nom = 'name_' . config('app.locale'); 
        //dd($categories);
        $pref = '"{{ __("';
        $suf = '")}}';
       
        $name = $pref.$nom.$suf; 

        return view('welcome', [                 
            'categories'    => $categories, 
            // 'name'          => $name,   
            // 'pref'          => $pref    
        ]);
    } 

    
} 