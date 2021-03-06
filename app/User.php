<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array*/
     
    protected $fillable = [
        'name', 
        'email', 
        'tlf', 
        'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array*/
     
    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
