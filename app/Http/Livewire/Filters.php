<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ressource;
use Livewire\WithPagination;
use App\Models\Relations_ressources;

class Filters extends Component
{   
    use WithPagination;

    public $activeFilters = [];
    public $cats;

    public function render()
    {
        $this->activeFilters = array_filter($this->activeFilters, function($val) {
            return $val;
        });

        return view('livewire.filters', [ 
           
            'ressources' => empty($this->activeFilters) 
                ? Ressource::paginate(15) 
                : Ressource::whereIn('cat_id', array_keys ($this->activeFilters))
                ->orderBy('ressource_date')
                ->get()
        ]);  
    }
}