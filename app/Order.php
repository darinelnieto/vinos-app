<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Relacion Modelo Product
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
