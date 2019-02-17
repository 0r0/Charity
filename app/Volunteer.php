<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Volunteer extends Authenticatable
{
    //
    use Notifiable;
    protected  $guard='Volunteer';
    protected $fillable=[
        'userName','email','password','remember_token'
    ];
    protected $hidden=[
      'password','remember_token'
    ];

}
