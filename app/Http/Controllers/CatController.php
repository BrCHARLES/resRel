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
            'colors' => Color::all() 
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
    //    return redirect()->route('admin.ressource.index')->with('success', "L'ressource a bien été créé !"); 
    

      //  dd($request->all());
        // $validated = $request->validated();

        // $image = $request->image->store('images'.'/'.'categories');  

        // Cat::create([
        //     'name'  => $request->input('name'),
        //     'image' => $image,
        //     'icon'  => $request->input('icon'),
        //     'color' => $request->input('color_id'),
        // ]);

      //  session()->flash('success', 'Categorie OK');
        
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
 
}

