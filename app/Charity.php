<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Charity extends  Authenticatable
{
    use Notifiable;

    protected $guard = 'charity';

    protected $fillable = [
        'userName', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    //many to many rel between project and charity model
    public function projects()
    {
        return $this->belongsToMany(Project::class);

    }
}
