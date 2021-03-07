<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use Illuminate\Http\Request;

class AdminRessourcesController extends Controller
{
    public function index()
    {
        return view('admin.ressources.index', [
            'ressources' => Ressource::paginate(10)
        ]);
    }
}
