<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartArray = Cart::getCartWithProducts();
        $totalPrice = Cart::getTotalPriceOfCartProducts();

        return view('cart.index')->with(compact('cartArray', 'totalPrice'));
    }

    public function store(Product $product)
    {
        $cartArray = Cart::addProductToCart($product);

        return back()->withCookie('cart', json_encode($cartArray))->with(['status' => 'Product successfully added to your cart!']);
    }

    public function destroy(Product $product)
    {
        $cartArray = Cart::removeProductFromCart($product);

        return back()->withCookie('cart', json_encode($cartArray));
    }

    public function unset(Product $product)
    {
        $cartArray = Cart::unsetProductFromCart($product);

        return back()->withCookie('cart', json_encode($cartArray));
    }
}
