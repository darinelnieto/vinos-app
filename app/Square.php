<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Square extends Model
{
    // Relacion 
    public function working_days(){
        return $this->belongsToMany('App\WorkingDay')->withTimestamps();
    }

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}

