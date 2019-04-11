<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\VolunteerResetPasswordNotification;

//use ResetPasswordNotification;

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

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('situation','skill','date');

}

    public function requirements()
    {
        return $this->belongsToMany(Requirement::class)->withPivot('situation');
}

    public function scopeSearch($query,$name){
        $key=explode(' ',$name);
//        $query->whereIn('firstName','like','%'.$key.'%')
        $query->whereIn('firstName',$key)
//            ->orWhereIn('lastName','like','%'.$key.'%');
            ->orWhereIn('lastName',$key);
    }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new VolunteerResetPasswordNotification($token));
    }


}
