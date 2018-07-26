<?php

namespace App\Http\Controllers;

use App\Food;
use App\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('admin.index');

    }

    public function menus(){

        $menus = Menu::all();
        return view('admin.menus', [
            'menus' => $menus,
        ]);

    }

    public function searchMenu(Request $request){
        $foods = Menu::find($request->menu)->foods;
        return view('admin.search', ['foods' => $foods]);

    }
}
