<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin','country',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function bookings(){
        return $this->hasMany('App\Booking');
    }

    
    public function tourplans(){
        return $this->hasMany('App\Tourplan');
    }

    public function places(){
        return $this->belongsToMany('App\Place');
    }

    public function properties(){
        return $this->belongsToMany('App\Property');
    }


}
