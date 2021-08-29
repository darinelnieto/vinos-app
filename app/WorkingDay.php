<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
    // Relacion
    public function Squares(){
        return $this->belongsToMany('App\Square')->withTimestamps();
    }
}
