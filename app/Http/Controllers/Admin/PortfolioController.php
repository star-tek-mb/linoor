<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Category;

class PortfolioController extends Controller
{

    public function index() {
        $portfolios = Portfolio::paginate(10);
        return view('admin.portfolio.index', ['portfolios' => $portfolios]);
    }

    public function create() {
        $categories = Category::all();
        return view('admin.portfolio.create', ['categories' => $categories]);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:portfolios,slug|max:255',
            'title' => 'required',
            'client' => 'required',
            'begin' => 'required|date_format:Y-m-d',
            'end' => 'required|date_format:Y-m-d',
            'description' => 'required',
            'cover' => 'image'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.portfolio.create')->withErrors($validator)->withInput();
        }

        $portfolio = new Portfolio($request->all());
        $portfolio->save();
        if ($request->hasFile('cover')) {
            $path = 'upload/portfolio' . $portfolio->id;
            $request->file('cover')->storeAs($path, 'cover.jpg', 'public');
        }
        return redirect()->route('admin.portfolio.edit', ['id' => $portfolio->id]);
    }

    public function edit($id) {
        $portfolio = Portfolio::findOrFail($id);
        $categories = Category::all();
        return view('admin.portfolio.edit', ['portfolio' => $portfolio, 'categories' => $categories]);
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $validator = Validator::make($data, [
            'slug' => 'required|max:255',
            'title' => 'required',
            'client' => 'required',
            'begin' => 'required|date_format:Y-m-d',
            'end' => 'required|date_format:Y-m-d',
            'description' => 'required',
            'cover' => 'image'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.portfolio.edit', ['id' => $id])->withErrors($validator)->withInput();
        }

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->fill($request->all())->save();
        if ($request->hasFile('cover')) {
            $path = 'upload/portfolio' . $id;
            $request->file('cover')->storeAs($path, 'cover.jpg', 'public');
        }
        return redirect()->route('admin.portfolio.index');
    }

    public function destroy($id) {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        Storage::deleteDirectory('/public/upload/portfolio' . $id); // delete folder with uploads
        return redirect()->route('admin.portfolio.index');
    }

    // upload image
    public function uploadImage(Request $request, $id) {
        if ($request->hasFile('upload')) {
            $path = 'upload/portfolio' . $id;
            $url = Storage::url($request->file('upload')->store($path, 'public'));
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
