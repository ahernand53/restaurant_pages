<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){

        return view('menu');

    }

    public function promotions(){

        return view('foods/promotions');

    }
}
