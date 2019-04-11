<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function Volunteer()
    {
        return $this->belongsTo(Volunteer::class);
    }

    public function Charity()
    {
        return $this->belongsTo(Charity::class);
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
//    public function commentable()
//
//    {
//
//        return $this->morphTo();
//
//    }
}
