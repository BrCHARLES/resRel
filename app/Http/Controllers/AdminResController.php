<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Cat;
use App\Models\Relation;
use App\Models\Ressource; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminResController extends Controller
{


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
            'rels'   => Relation::all(),
            'cats'  => Cat::all()
        ]);
    }
    public function store(Request $request)
    { 
        $ressource = new Ressource;
        
        $this->validate($request,[
            'ressource_title'       => 'required', 
            'cat_id'                => 'required', 
            'ressource_description' => 'required',
            'content_type'          => 'required',
        ]);

        $ressource->cat_id = $request->input('cat_id');
        $ressource->ressource_title = $request->input('ressource_title');
        $ressource->ressource_stitre = $request->input('ressource_stitre');
        $ressource->ressource_date = new DateTime('now');
        $ressource->ressource_description = $request->input('ressource_description');
        if( $ressource->ressource_image)    {
            $ressource->ressource_image = $request->file('ressource_image')->storeAs('images/ressources', $ressource->ressource_title);
        
          //  $ressource->ressource_image =   "test" ;
        }

      //  $ressource->ressource_image = $request->file('ressource_image')->storeAs('images/ressources', $ressource->ressource_title);
        

        $ressource->video_url = $request->input('video_url '); 
        $ressource->content_type = $request->input('content_type'); 
        $ressource->active = 1; 
       
        $ressource->save();

       return redirect()->route('admin.res.list');

   }
    public function storus(RessourcesRequest $request)
    {
        $ressource = new Ressource();
        
        $this->ressourceManager->build($ressource, $request); 
        
        return redirect(route('admin.res.list')) ;
        
 
        // $ressource = new Ressource; 

        // $image = $request->image->store('images'.'/'.'categories');
        // $ressource->cat_id = $request->input('cat_id');
        // $ressource->ressource_title = $request->input('ressource_title');
        // $ressource->ressource_stitre = $request->input('ressource_stitre');
        // $ressource->ressource_date = new DateTime('now');
        // $ressource->ressource_description = $request->input('ressource_description');
        // $ressource->ressource_image = $request->input('ressource_image');
        // $ressource->video_url = $request->input('video_url '); 
        // $ressource->content_type = $request->input('content_type'); 
        // $ressource->active = 1; 
 

        // if ($request->hasFile('ressource_image')) {

        //     $request->validate([
        //         'ressource_image' => 'mimes:jpeg,bmp,png' 
        //     ]);
 
        //     $request->file->store('ressource', 'public');
 
        //     $ressource = new Ressource([
        //         "cat_id" => $request->get('cat_id'),
        //         "ressource_title" => $request->get('ressource_title'), 
        //         "ressource_stitre" => $request->get('ressource_stitre'),
        //         "ressource_date" =>  new DateTime('now'),
        //         "ressource_description" => $request->get('ressource_description'),
        //         "file_path" => $request->file->hashName(),
        //         "video_url" => $request->get('video_url'),
        //         "content_type" => $request->get('content_type'),
        //         "active" => 1



        //     ]);
        //     $ressource->save();  
        




      //  $ressource->save();
     //   return redirect()->route('admin.res.list');
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
