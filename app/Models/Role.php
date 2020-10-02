<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;



    //DO NOT delete
    const OWNER = 1;
    const ADMINISTRATOR = 2;
    const MANAGEMENT = 3;
    const SUPPORT = 4;

    //DO NOT delete
    public static $roles = [
        self::OWNER => 'Owner',
        self::ADMINISTRATOR => 'Administrator',
        self::MANAGEMENT => 'Management',
        self::SUPPORT => 'Support',
    ];



    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
