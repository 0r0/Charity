<?php

namespace App;

use App\Notifications\CharityResetPasswordNotification;
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
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CharityResetPasswordNotification($token));
    }
}
