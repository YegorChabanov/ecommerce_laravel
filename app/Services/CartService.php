<?php

namespace App\Services;

use App\Product;

class CartService
{
    public function getCartArray()
    {
        $cartArray = json_decode(request()->cookie('cart'), true);
        if (!is_array($cartArray)){
            $cartArray = [];
        }

        return $cartArray;
    }

    public function addProductToCart(Product $product)
    {
        $cart = $this->getCartArray();
        if (isset($cart[$product->id])){
            $cart[$product->id]++;
        } else {
            $cart[$product->id] = 1;
        }

        return $cart;
    }

    public function removeProductFromCart(Product $product)
    {
        $cart = $this->getCartArray();
        if (isset($cart[$product->id])) {
            $cart[$product->id]--;
            if ($cart[$product->id] < 1) {
                unset($cart[$product->id]);
            }
        }

        return $cart;
    }

    public function unsetProductFromCart(Product $product)
    {
        $cart = $this->getCartArray();
        unset($cart[$product->id]);

        return $cart;
    }

    public function getCartWithProducts()
    {
        $cart = $this->getCartArray();
        $cartWithProducts = [];
        if (count($cart) > 0) {
            foreach ($cart as $productId => $quantity) {
                $cartWithProducts[] = [
                    'quantity' => $quantity,
                    'product' => Product::find($productId)
                ];
            }
        }

        return $cartWithProducts;
    }

    public function getTotalPriceOfCartProducts()
    {
        $cartArray =  $this->getCartWithProducts();
        $totalPrice = 0;
        foreach ($cartArray as $cartItem) {
            $totalPrice += $cartItem['product']->price * $cartItem['quantity'];
        }

        return $totalPrice;
    }
}
