<?php

namespace App\Models;

use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'icon',
        'color_id'
    ];
 

	public function color() 
	{
		return $this->belongsTo(Color::class);
	}
   
}
