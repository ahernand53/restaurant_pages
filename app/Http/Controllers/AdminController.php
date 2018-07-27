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
        return view('admin.search', ['foods' => $foods, 'menu_id' => $request->menu]);

    }

    public function addMenu(Request $request){
        $foods = Menu::find($request->menu)->foods;
        dd($foods);
        if(count($foods) >= 4 ){
            $message = 'El menu tiene un limite de 4 comidas';
            return view('admin.search', [
                'message' => $message,
                'foods' => $foods,
                'menu_id' => $request->menu
            ]);
        }else {
            $allFoods = Food::all();
            return view('admin.menu.add', [
                'foods' => $allFoods,
            ]);
        }
    }

    public function delMenu(Request $request){

        $menu = Menu::find($request->id);
        if($menu != null){
//            $menu->delete();
            $message = 'Menu Eliminado';
            $menus = Menu::all();
            return view('admin.menus', ['menus' => $menus, 'message' => $message]);
        }
        dd($menu);

    }
}
