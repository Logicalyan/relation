<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();

        return view('category.index', compact('categories'));
    }
    public function create(){

        return view('category.create');
    }
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|string|unique:categories',
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('category.index');

    }
    public function edit(){

    }
    public function update(Request $request){

    }
    public function destroy(){

    }
}
