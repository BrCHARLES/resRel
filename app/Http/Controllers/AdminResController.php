<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Relation;
// use App\Models\Relations_ressources;
use App\Models\Ressource;
use Illuminate\Http\Request;

class AdminResController extends Controller
{
    protected $request;
      
    public function list(Ressource $ressource){

        $ressource->with('relations')->get();   

        return view('admin.res.index', [ 
            'ressources'    => Ressource::all(),
            'relations'     => Relation::all()
        ]); 
    }

    public function show($id)
    { 
        return view('admin.res.res', [
            'res' => Ressource::where('id', $id)->firstOrFail()             
        ]);
        
    }
   

    public function create()
    {
        return view('admin.res.create', [
            'rel'   => Relation::all(),
            'cats'  => Cat::all()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]); 
        
        Ressource::create($request->all());
        return redirect()->route('admin.res.list');    
    }
 
    public function edit($id){        
        $res = Ressource::findOrFail($id);
        return view('admin.res.edit' , compact('res'));            
    }
   
 

     
    public function activate($id){
        $ressource = Ressource::findOrFail($id); 
            if($ressource->active == 1 ) { 
                    $ressource->active = 0;
            }else{
                $ressource->active = 1;
            }
        $ressource->save() ;
        return redirect('admin/res');
    }
 
}
