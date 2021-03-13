<?php

use Middleware\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\RessourceController;
use App\Http\Controllers\StaticViewsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AdminResController;
 

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

    Route::get('/{locale}/ressources',  [RessourceController::class, 'index'] )  
        ->name('ressources');
    Route::get('/{locale}/ressources/{id}',  [RessourceController::class, 'show'] )  
        ->name('ressource');
  
 
//************  Zone d'administration  *******************// 

//****************  RESSOURCES  ************// 
Route::get('/admin/res', [ AdminResController::class, 'list'])->name('admin.res.list');

Route::get('/admin/res/create',  [ AdminResController::class, 'create'])->name('admin.res.create'); 

Route::get('/admin/res/{id}', [ AdminResController::class, 'show'])->name('admin.res.res');
Route::post('/admin/res/edit/{id}', [ AdminResController::class, 'store'])->name('admin.res.edit');
Route::post('/admin/res/store', [ AdminResController::class, 'store'])->name('admin.res.store');
Route::get('/admin/res/activate/{id}', [ AdminResController::class, 'activate']);

//****************  CATEGORIES DE RESSOURCES  ************//
Route::get('/admin/categories', [ CatController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categories/create', [ CatController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/store', [ CatController::class, 'store'])->name('admin.category.store'); 
Route::get('/admin/categories/edit/{id}', [ CatController::class, 'edit'])->name('admin.category.edit');
Route::get('/admin/categories/activate/{id}', [ CatController::class, 'activate']);
Route::delete('/admin/categorie/delete/{id}' , [ CatController::class, 'destroy'])->name('admin.category.delete');
//****************  TYPES DE RESSOURCES  ****************//

Route::get('/admin/types', [ TypeController::class, 'index'])->name('admin.types.index');
Route::get('/admin/types/create',  [ TypeController::class, 'create']); 
Route::post('/admin/types/store', [ TypeController::class, 'store'])->name('admin.type.store');
Route::get('/admin/types/{id}/edit',[ TypeController::class, 'edit']); 
Route::put('/admin/types/{id}/update', [ TypeController::class, 'update'])->name('admin.type.update'); 
// Route::get('/admin/types/delete/{id}', 'TypeController@destroy' );
Route::get('/admin/types/activate/{id}', [ TypeController::class, 'activate']);

  