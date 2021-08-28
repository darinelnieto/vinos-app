<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Square extends Model
{
    //Relación tabla square ft workingDay
    return $this->belongsToMany('App\WorkingDay')->withTimestamps();
}
