<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Category;

class PortfolioController extends Controller
{

    public function index() {
        $portfolios = Portfolio::all();
        $categories = Category::all();
        return view('site.portfolio.index', ['portfolios' => $portfolios, 'categories' => $categories]);
    }

    public function show($slug) {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('site.portfolio.show', ['portfolio' => $portfolio]);
    }

}
