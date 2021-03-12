<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Ressource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cat extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'icon',
        'color_id',
        'active'
    ];
 

	public function color() 
	{
		return $this->belongsTo(Color::class);
	}

   public function ressource()
    {
      return $this->hasMany(Ressource::class);
    }
    
}
