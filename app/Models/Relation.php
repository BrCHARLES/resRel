<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public $timestamps = false;

    use HasFactory;
    
    protected $fillable = [
        'id',
        'relation' 
    ];

    public function ressources()
    {
        return $this->belongsToMany('App\Models\Ressource','relations_ressources');
    }
}
