<?php

use Middleware\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\RessourceController;
use App\Http\Controllers\StaticViewsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\StatistiquesController;
 

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
    Route::get('/{locale}/ressources/{slug}',  [RessourceController::class, 'show'] )  
        ->name('ressource');
 
 
//************  Zone d'administration  *******************// 

//****************  CATEGORIES DE RESSOURCES  ************//

Route::get('/admin/categories', [ CatController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categories/create', [ CatController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/store', [ CatController::class, 'store'])->name('admin.category.store');

Route::get('/admin/datatable', [ CatController::class, 'index'])->name('admin.datatable');

//****************  TYPES DE RESSOURCES  ****************//

Route::get('/admin/types', [ TypeController::class, 'index'])->name('admin.types.index');
Route::get('admin/types/create',  [ TypeController::class, 'create']); 
Route::post('/admin/types/store', [ TypeController::class, 'store'])->name('admin.type.store');
Route::get('/admin/types/{id}/edit',[ TypeController::class, 'edit']); 
Route::put('/admin/types/{id}/update', [ TypeController::class, 'update'])->name('admin.type.update'); 
// Route::get('/admin/types/delete/{id}', 'TypeController@destroy' );
Route::get('/admin/types/activate/{id}', [ TypeController::class, 'activate']);


//****************  STATISTIQUES ADMIN  ****************//
Route::get('/admin/statistiques', [ StatistiquesController::class, 'index'])->name('admin.statistiques');
Route::get('/admin/statistiques/export/users', [ StatistiquesController::class, 'exportUsers'])->name('admin.export.users');
Route::get('/admin/statistiques/export/total', [ StatistiquesController::class, 'exportTotal'])->name('admin.export.total');
Route::get('/admin/statistiques/import', [ StatistiquesController::class, 'import'])->name('admin.import');

//****************************Dashboard citoyen connecté */
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');