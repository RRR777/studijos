<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'users';

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
