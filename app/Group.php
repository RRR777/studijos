<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'lector_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
