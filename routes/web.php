<?php

use Middleware\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StaticViewsController;
use App\Http\Controllers\LocalizationController;
 
 
// INI Localization controller. Ne pas supprimer
        // Route::get('/{lang}', function ($lang) {
        //     App::setlocale($lang);
        //     return view('welcome');
        // }); 

// View front avec application de la localisation

    Route::get('/', function () {return redirect(app()->getLocale()); }); 
    
    Route::group([
        'prefix' => '{locale}', 
        'where' => ['locale' => '[a-zA-Z]{2}'], 
        'middleware' => 'setlocale'], function() {  
            
        Route::get('/', [WelcomeController::class, 'index'])->name('welcome'); 
        Route::get('/statiquesPages/aide', [StaticViewsController::class, 'aide'])->name('aide');
        Route::get('/statiquesPages/a-propos', [StaticViewsController::class, 'apropos'])->name('a-propos');
        Route::get('/statiquesPages/contact', [StaticViewsController::class, 'contact'])->name('contact');
        Route::get('/statiquesPages/faq', [StaticViewsController::class, 'faq'])->name('faq');
      
    });
 
//********************************************************//
//************  Zone d'administration  *******************//
//********************************************************//

//****************  TYPES DE RESSOURCES  ****************//

Route::get('/admin/types', [ TypeController::class, 'index'])->name('admin.types.index');
Route::get('admin/types/create',  [ TypeController::class, 'create']); 
Route::post('/admin/types/store', [ TypeController::class, 'store'])->name('admin.type.store');
Route::get('/admin/types/{id}/edit',[ TypeController::class, 'edit']); 
Route::put('/admin/types/{id}/update', [ TypeController::class, 'update'])->name('admin.type.update'); 
// Route::get('/admin/types/delete/{id}', 'TypeController@destroy' );
Route::get('/admin/types/activate/{id}', [ TypeController::class, 'activate']);

<<<<<<< HEAD
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
=======
//****************  TYPES DE RESSOURCES  ****************//
Route::get('/admin/datatable', function() {
    return view('/admin/datatable');
});
>>>>>>> 700791d37a30157263a63453454f51ca6c590667
