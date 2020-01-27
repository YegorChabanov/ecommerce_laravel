<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('show');
    }

    public function index()
    {
        $products = Product::all();
        return view('products.all_products')->with('products', $products);
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create')->with('categories', $categories);
    }


    public function store(ProductRequest $request)
    {
        Product::create($request->all());
        return redirect('/products')->with(['status' => 'New product was added successfully!']);
    }


    public function show(Product $product)
    {
        return view('products.index')->with('product', $product);
    }

    public function edit(Product $product)
    {
        return view('products.edit')->with('product', $product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect('/products')->with(['status'=> 'Product was updated successfully!']);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with(['status'=> 'Product was deleted successfully!']);
    }
}
