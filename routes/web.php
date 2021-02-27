<?php

use Middleware\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RessourceController;
use App\Http\Controllers\StaticViewsController;
use App\Http\Controllers\LocalizationController;
 

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


        Route::get('/ressources', [RessourceController::class, 'index'])->name('ressources');  
        Route::get(' /ressources/{slug}', [ RessourceController::class, 'show'])->name('ressource');
    });
 




//********************************************************//
//************  Zone d'administration  *******************//
//********************************************************//
//****************  CATEGORIES DE RESSOURCES  ****************//

Route::get('/admin/categories', [ CatController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categories/create', [ CatController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/store', [ CatController::class, 'store'])->name('admin.category.store');

//****************  TYPES DE RESSOURCES  ****************//

Route::get('/admin/types', [ TypeController::class, 'index'])->name('admin.types.index');
Route::get('admin/types/create',  [ TypeController::class, 'create']); 
Route::post('/admin/types/store', [ TypeController::class, 'store'])->name('admin.type.store');
Route::get('/admin/types/{id}/edit',[ TypeController::class, 'edit']); 
Route::put('/admin/types/{id}/update', [ TypeController::class, 'update'])->name('admin.type.update'); 
// Route::get('/admin/types/delete/{id}', 'TypeController@destroy' );
Route::get('/admin/types/activate/{id}', [ TypeController::class, 'activate']);

 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


<<<<<<< HEAD
// restreindre les accés admin.
// BC
// 
=======
 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
>>>>>>> refs/remotes/origin/master
