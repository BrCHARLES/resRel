<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StaticViewsController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/statiquesPages/aide', [StaticViewsController::class, 'aide'])->name('aide');
Route::get('/statiquesPages/a-propos', [StaticViewsController::class, 'apropos'])->name('a-propos');
Route::get('/statiquesPages/contact', [StaticViewsController::class, 'contact'])->name('contact');
Route::get('/statiquesPages/faq', [StaticViewsController::class, 'faq'])->name('faq');

 