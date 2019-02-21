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
        return $this->belongsToMany(Volunteer::class)->withPivot('situation','skill');
    }

    public function reqiurements()
    {
        return $this->hasMany(Requirement::class);
    }
}
