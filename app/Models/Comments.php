<?php

namespace App\Models;

use App\Models\Ressource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'nid',
        'user_id',
        'content',
        'comment_status',
        'date_time',
    ];

    public function ressource()
    {
        return $this->belongsTo(Ressource::class);
    }
}
