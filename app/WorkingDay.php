<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
    //Relación tabla workingDay ft square
    return $this->belongsToMany('App\Square')->withTimestamps();
}
