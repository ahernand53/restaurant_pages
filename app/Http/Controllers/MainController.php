<?php

namespace App\Http\Controllers;

use App\Food;
use App\Sliders;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $foods = Food::get();
        $sliders = Sliders::all();

        return view('welcome', [
            'foods' => $foods,
            'sliders' => $sliders,
        ]);

    }
}
