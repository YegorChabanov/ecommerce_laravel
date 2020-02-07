<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;

class HomepageController extends Controller
{
    public function index()
    {
        $pages = Page::all()->keyBy('slug')->toArray();
        $categories = Category::all();
        $products = Product::all();
        $topSellerProducts = Product::all()->where('is_top_seller', '=', 1);

        return view('homepage')->with(compact('cartArray','products', 'topSellerProducts', 'categories', 'pages'));
    }
}
