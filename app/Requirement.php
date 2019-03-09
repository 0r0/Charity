<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scopeSearch($query, $place = null, $free = null)
    {

        return $query->where('place', 'like', '%' . $place . '%')
            ->where('bill_kind', 'like', '%' . $free . '%');
    }
}
