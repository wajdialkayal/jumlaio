<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address', 
        'country', 
        'user_id', 
        'page_id', 
       
    ];

    public function page()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
