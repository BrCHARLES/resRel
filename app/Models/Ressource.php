<?php

namespace App\Models;

use App\Models\Cat; 
use App\Models\Comments;
use App\Models\Relation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ressource extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [ 
        'cat_id',
        'ressource_title',
        'ressource_stitle',
        'ressource_date',
        'ressource_description',
        'ressource_image',
        'video_url',
        'video_id',
        'content_type',
        'size',
        'active',
        'lang',
        'user_id' 
    ];

    public function cat() 
	{
		return $this->belongsTo(Cat::class);
	}
    public function comments() 
	{
		return $this->hasMany(Comments::class);
	}

    public function relations()
    {
        return $this->belongsToMany('App\Models\Relation', 'relations_ressources');
    }
    
}
