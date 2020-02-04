<?php

namespace App\Http\Controllers;

use App\Services\CartOrderGenerator;
use App\Services\CartService;
use App\Category;
use App\Order;
use App\Page;
use App\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        $cartArray = $this->cartService->getCartArray();
        $products = Product::all();
        $topSellerProducts = Product::all()->where('is_top_seller', '=', 1);
        $categories = Category::all();

        $pages = Page::all();
        foreach ($pages as $page) {
            switch ($page->slug) {
                case 'iphone_11':
                    $iphoneArticle = $page;
                    break;
                case 'sale_10_on_every_smartphone':
                    $saleArticle = $page;
                    break;
                case 'about_us':
                    $aboutUsArticle = $page;
                    break;
                case 'order_returns':
                    $orderReturnsArticle = $page;
            }
        }
        return view('homepage')->with(compact('cartArray','products', 'topSellerProducts', 'categories', 'iphoneArticle', 'saleArticle', 'aboutUsArticle', 'orderReturnsArticle'));
    }
}
