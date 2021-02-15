<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        
        $categories = DB::table('categories')->get();;
      //  dd($categories);
        return view('welcome', [                 
            'categories'    => $categories,
        ]);
    } 
} 