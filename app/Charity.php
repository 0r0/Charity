<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    //many to many rel between project and charity model
    public function projects()
    {
        return $this->belongsToMany(Project::class);

    }
}
