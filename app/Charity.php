<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Charity extends  Authenticatable
{
    use Notifiable;

    protected $guard = 'Charity';

    protected $fillable = [
        'userName', 'email', 'password',
    ];
    //many to many rel between project and charity model
    public function projects()
    {
        return $this->belongsToMany(Project::class);

    }
}
