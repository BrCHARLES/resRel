<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Carbon\Traits\Date;
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
       
        $ressources->with('relations')->get(); 
        return view('ressources', 
        [ 
            'ressources'    => Ressource::all(),
            'cats'          => Cat::all()
         ]);
    }

     public function show($locale,$slug)
    { 
        return view('ressource', [
            'ressource' => Ressource::where('slug', $slug)->firstOrFail()
        ]);
        
    }
        // $slug = Ressource::find($slug); 
        // dd($slug);
        // return view('ressource', [app()->getLocale(), 'slug' => $slug
        // ]);
    
}
