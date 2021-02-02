<?php

use Illuminate\Support\Facades\Route;
 

Route::get('/', function () {
    return view('home');
});

Route::get('/a-propos', function(){
    return view('statics.a-propos');
});

Route::get('/contact', function(){
    return view('statics.contact');
});

// Routes nommées : 
// liens dynamiques
