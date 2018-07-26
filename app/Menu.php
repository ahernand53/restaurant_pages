<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function foods() {

        return $this->belongsToMany('App\Food');

    }
}
