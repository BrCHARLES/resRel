<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comments;
use App\Models\Ressource;
use Illuminate\Http\Request;

class StatistiquesController extends Controller
{
    public function index(){
        // Retourne tout les enregistrements des users, comments et ressources

        return view('admin.statistiques',[
            'allUsers' => User::all(),
            'allRessources' => Ressource::all(),
            'allComments' => Comments::all(),
        ]);
    }
}
