<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address', 
        'country', 
        'user_id', 
        'post_id', 
       
    ];


    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
