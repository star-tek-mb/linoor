<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::latest()->take(5)->get();
        return view('site.blog.index', ['blogs' => $blogs]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::inRandomOrder()->take(3)->get();
        return view('site.blog.show', ['blog' => $blog, 'blogs' => $blogs]);
    }

    public function all() {
        $blogs = Blog::all();
        return view('site.blog.all', ['blogs' => $blogs]);
    }
}
