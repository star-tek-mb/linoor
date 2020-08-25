<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('admin.blog.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:blogs,slug|max:255',
            'title' => 'required',
            'description' => 'required',
            'cover' => 'image'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.blog.create')->withErrors($validator)->withInput();
        }

        $blog = new Blog($request->all());
        $blog->save();
        if ($request->hasFile('cover')) {
            $path = 'upload/blog' . $id;
            $request->file('cover')->storeAs($path, 'cover.jpg', 'public');
        }
        return redirect()->route('admin.blog.index', ['id' => $blog->id]);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|max:255',
            'title' => 'required',
            'description' => 'required',
            'cover' => 'image'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.blog.edit', ['id' => $id])->withErrors($validator)->withInput();
        }

        $blog = Blog::findOrFail($id);
        $blog->fill($request->all())->save();
        if ($request->hasFile('cover')) {
            $path = 'upload/blog' . $id;
            $request->file('cover')->storeAs($path, 'cover.jpg', 'public');
        }
        return redirect()->route('admin.blog.index');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blog.index');
    }

    public function uploadImage(Request $request, $id) {
        if ($request->hasFile('upload')) {
            $path = 'upload/blog' . $id;
            $url = Storage::url($request->file('upload')->store($path, 'public'));
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
