<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Food extends Model
{
    protected $guarded = [];
    protected $hidden = ['status'];

    public function allMenus(){

        return $this->belongsToMany('App\Food');

    }


}
