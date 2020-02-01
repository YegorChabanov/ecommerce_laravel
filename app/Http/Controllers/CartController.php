<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Product;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        $cartArray = $this->cartService->getCartWithProducts();
        $totalPrice = $this->cartService->getTotalPriceOfCartProducts();

        return view('cart.index')->with(compact('cartArray', 'totalPrice'));
    }

    public function store(Product $product)
    {
        $cartArray = $this->cartService->addProductToCart($product);

        return back()->withCookie('cart', json_encode($cartArray))->with(['status' => 'Product successfully added to your cart!']);
    }

    public function destroy(Product $product)
    {
        $cartArray = $this->cartService->removeProductFromCart($product);

        return back()->withCookie('cart', json_encode($cartArray));
    }

    public function unset(Product $product)
    {
        $cartArray = $this->cartService->unsetProductFromCart($product);

        return back()->withCookie('cart', json_encode($cartArray));
    }
}
