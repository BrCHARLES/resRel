<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ressource;
use Livewire\WithPagination;
use App\Models\Relations_ressources;

class Filters extends Component
{   
    public $activeFilters = [];
    public $cats;

    public function render()
    {
        $this->activeFilters = array_filter($this->activeFilters, function($val) {
            return $val;
        });

        return view('livewire.filters', [
         //   'relations' => Relations_ressources::all(),
           
            'ressources' => empty($this->activeFilters) 
                ? Ressource::all() 
                : Ressource::whereIn('cat_id', array_keys ($this->activeFilters))
                ->orderBy('ressource_date')
                ->get()
        ]);  
    }
}