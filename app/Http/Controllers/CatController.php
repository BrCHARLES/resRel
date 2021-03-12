<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Color;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Manager\catManager;
use App\Http\Requests\CatsRequest; 


class CatController extends Controller
{

    private $catManager;

    public function __construct(catManager $catManager) 
    {
        $this->catManager = $catManager;
    }

    public function index()
    {  
        return view('admin.categories.index' , [ 
           'cats' => Cat::all() 
        ]);       
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.categories.create', [
            'colors' => Color::all(), 
        ]);     
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Request\CatsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatsRequest $request)
    {       
         
        $cat = new cat();
        
        $this->catManager->build($cat, $request); 
        
        return redirect(route('admin.categories.index'))->with('success', 'La catégorie a bien été crée');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id){        
        $cat = Cat::findOrFail($id);
        return view('admin.categories.edit' , compact('cat'));            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        
    public function activate($id){
        $cat = Cat::findOrFail($id); 
            if($cat->active == 1 ) { 
                    $cat->active = 0;
            }else{
                $cat->active = 1;
            }
        $cat->save() ;
        return redirect('admin/categories');
    }

 public function destroy($id){
    $cat = Cat::findOrFail($id);
 
    $cat->delete();
    return redirect(route('admin.categories.index'))->with('success', 'La catégorie a bien été supprimée');


 }
}

