<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comments;
use App\Models\Ressource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Rap2hpoutre\FastExcel\FastExcel;
use Rap2hpoutre\FastExcel\SheetCollection;

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

    public function exportUsers(){
        return (new FastExcel(User::all()))->download('utilisateurs.xlsx');
    }
    public function exportTotal(){
        $sheets = new SheetCollection([
            User::all(),
            // Ressource::all(), export ne se fait pas, trop de caractères dans les cellules
            Comments::all()
        ]);

         return (new FastExcel($sheets))->download("exportTotal-" . date('l jS \of F Y') .".xlsx");
    }

    public function import(){

        $users = (new FastExcel)->configureCsv(';', '#', '\n', 'gbk')->import('file.xlsx', function ($line) {
            return User::create([
                'name' => $line['Name'],
                'email' => $line['Email']
            ]);
        });
    }
}
