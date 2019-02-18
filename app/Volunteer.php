<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Volunteer extends Authenticatable
{
    //
    use Notifiable;
    protected $guard = 'volunteer';
    protected $fillable = [
        'userName', 'email', 'password', 'remember_token'
    ];
    protected $hidden = [
        'password', 'remember_token'
    ];

}
