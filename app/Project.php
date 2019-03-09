<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //many to many rel between project and charity model
    public function charities()
    {
        return $this->belongsToMany(Charity::class);

    }

    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class)->withPivot('situation', 'skill', 'date');
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function scopeSearch($query, $title, $place=null, $free=null, $bill=null)
    {
        return $query->where('title','like','%'.$title.'%');


    }

}
