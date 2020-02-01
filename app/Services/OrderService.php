<?php

namespace App\Services;

use App\Order;

class OrderService
{
    public function getOrderTotalAmount(Order $id)
    {
        $order = Order::find($id)->first();
        $totalAmount = 0;
        foreach ($order->products as $product) {
            $totalAmount += $product->price * $product->pivot->quantity;
        }

        return $totalAmount;
    }
}
