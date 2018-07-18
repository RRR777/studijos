<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
     protected $fillable = [
        'group_id',
        'name',
        'date',
        'description'
    ];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
