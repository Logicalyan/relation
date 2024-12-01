<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){

        $menus = Menu::all();

        return view('menu.index', compact('menus'));
    }
    public function create(){
        $categories= Category::all();
        return view('menu.create', compact('categories'));
    }
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|string',
            'stock' => 'required|integer',
            'category_id' => 'required|numeric'
        ]);

        Menu::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('menu.index');
    }
    public function edit(){

    }
    public function update(Request $request){

    }
    public function destroy(){

    }
}
