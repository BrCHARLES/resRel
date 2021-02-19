<?php

namespace App\Models;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    public $timestamps = false;
    
    use HasFactory;
    
    protected $fillable = [ 
        'color',
        'rgba' 
    ];

    public function cats() 
    {
        return $this->hasMany(Cat::class);
    }
}
