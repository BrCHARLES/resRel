<?php 

namespace App\Manager;

use App\Models\Ressource;
use Illuminate\Http\Request;

class RessourceManager 
{  
    public function build(ressource $ressource, Request $request)
    {
        $image = $request->image->store('images'.'/'.'ressources');

        $ressource->name = $request->get('name');
        $ressource->image = $image;
        $ressource->icon = $request->get('icon');
        $ressource->color_id = $request->get('color_id');
        $ressource->save();
    }

}