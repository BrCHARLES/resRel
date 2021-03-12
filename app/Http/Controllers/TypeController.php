<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    protected $request;
      
    public function index(){
        return view('admin.types.index', [ 
            'types' => Type::all()
        ]);
    }
 

    public function create(){        
        return view('admin.types.create'); 
    }
  
    public function store(Request $request){
        $request->validate([
            'name' => 'required'
        ]); 
        
        Type::create($request->all());
        return redirect()->route('admin.types.index');    
    }

    public function edit($id){        
        $type = Type::findOrFail($id);
        return view('admin.types.edit' , compact('type'));            
    }
 
      
    public function activate($id){
        $type = Type::findOrFail($id); 
            if($type->actif == 1 ) { 
                    $type->actif = 0;
            }else{
                $type->actif = 1;
            }
        $type->save() ;
        return redirect('admin/types');
    }
}