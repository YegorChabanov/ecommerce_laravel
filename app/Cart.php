<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public static function getCartArray()
    {
        $cartArray = json_decode(request()->cookie('cart'), true);
        if (!is_array($cartArray)){
            $cartArray = [];
        }

        return $cartArray;
    }

    public static function addProductToCart(Product $product)
    {
        $cart = self::getCartArray();
        if (isset($cart[$product->id])){
            $cart[$product->id]++;
        } else {
            $cart[$product->id] = 1;
        }

        return $cart;
    }

    static public function removeProductFromCart(Product $product)
    {
        $cart = self::getCartArray();
        if (isset($cart[$product->id])) {
            $cart[$product->id]--;
            if ($cart[$product->id] < 1) {
                unset($cart[$product->id]);
            }
        }

        return $cart;
    }

    public static function unsetProductFromCart(Product $product)
    {
        $cart = self::getCartArray();
        unset($cart[$product->id]);

        return $cart;
    }

    public static function getCartWithProducts()
    {
        $cart = self::getCartArray();
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

    public static function getTotalPriceOfCartProducts()
    {
        $cartArray = self::getCartWithProducts();
        $totalPrice = 0;
        foreach ($cartArray as $cartItem) {
            $totalPrice += $cartItem['product']->price * $cartItem['quantity'];
        }

        return $totalPrice;
    }
}
