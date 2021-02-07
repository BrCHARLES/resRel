<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StaticViewsController;
use App\Http\Controllers\LocalizationController;
use Middleware\Localization;
use Illuminate\Support\Facades\App;
 
 
// INI Localization controller. Ne pas supprimer
        // Route::get('/{lang}', function ($lang) {
        //     App::setlocale($lang);
        //     return view('welcome');
        // }); 

    Route::group([
        'prefix' => '{locale}', 
        'where' => ['locale' => '[a-zA-Z]{2}'], 
        'middleware' => 'setlocale'], function() {  
            
        Route::get('/', function () {return redirect(app()->getLocale()); }); 

        Route::get('/', [WelcomeController::class, 'index'])->name('welcome'); 
        Route::get('/statiquesPages/aide', [StaticViewsController::class, 'aide'])->name('aide');
        Route::get('/statiquesPages/a-propos', [StaticViewsController::class, 'apropos'])->name('a-propos');
        Route::get('/statiquesPages/contact', [StaticViewsController::class, 'contact'])->name('contact');
        Route::get('/statiquesPages/faq', [StaticViewsController::class, 'faq'])->name('faq');
      
    });
 
 