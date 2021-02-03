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
Route::get('/faq', function(){
    return view('statics.faq');
});
Route::get('/aide', function(){
    return view('statics.aide');
});
// Routes nommées : 
// liens dynamiques
