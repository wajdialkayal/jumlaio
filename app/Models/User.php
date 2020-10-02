<?php

namespace App\Models;

use App\Traits\EmailAlert;
use App\Traits\HasProfilePhoto;
use App\Traits\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasProfilePhoto, TwoFactorAuthenticatable, EmailAlert;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'username', 
        'phone', 
        'password', 
        'email_alert', 
        'country', 
        'timezone',
        'two_factor_code',
        'two_factor_expires_at',
        'birthdate',
        'private',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'two_factor_code',
        'two_factor_expires_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
      
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'email_verified_at',
        'two_factor_expires_at',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function pages()
    {
        return $this->belongsToMany('App\Models\Page')->withPivot('role_id')->withTimestamps();
    }
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function shares()
    {
        return $this->hasMany('App\Models\Share');
    }
   
    public function followings()
    {
        return $this->belongsToMany('App\Models\Follower');
    }


    public function getRoleNameAttribute(){
        return Role::where('id',  $this->pivot->role_id)->first()->name;
    }


    public function getIsOwnerAttribute(){
        return $this->pivot->role_id == Role::OWNER;
    }
}