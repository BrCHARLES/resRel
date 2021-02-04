<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticViewsController extends Controller
{
    public function apropos(){
        return view('statiquesPages/a-propos');
    }
    public function contact(){
        return view('statiquesPages/contact');
    }
    public function aide(){
        return view('statiquesPages/aide');
    }
    public function faq(){
        return view('statiquesPages/faq');
    }
}
