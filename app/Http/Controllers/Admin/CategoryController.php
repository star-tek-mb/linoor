<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:categories,slug|max:255',
            'title' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.category.create')->withErrors($validator)->withInput();
        }

        $category = new Category($request->all());
        $category->save();
        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|max:255',
            'title' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.category.edit', ['id' => $id])->withErrors($validator)->withInput();
        }

        $category = Category::findOrFail($id);
        $category->fill($request->all())->save();
        return redirect()->route('admin.category.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
