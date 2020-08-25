<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Category;
use App\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        $categories = Category::all();
        $blogs = Blog::latest()->take(3)->get();
        return view('site.home', ['portfolios' => $portfolios, 'categories' => $categories, 'blogs' => $blogs]);
    }
}