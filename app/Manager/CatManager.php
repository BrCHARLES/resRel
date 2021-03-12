<?php 

namespace App\Manager;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatManager 
{  
    public function build(cat $cat, Request $request)
    {
        $image = $request->image->store('images'.'/'.'categories');

        $cat->name = $request->get('name');
        $cat->image = $image;
        $cat->icon = $request->get('icon');
        $cat->color_id = $request->get('color_id');
        $cat->active = $request->get('active');
        $cat->save();
    }

}