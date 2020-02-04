<?php

namespace App\Services;

use App\Order;

class OrderService
{
    public function getOrderTotalAmount(Order $order)
    {
        $totalAmount = 0;
        foreach ($order->products as $product) {
            $totalAmount += $product->price * $product->pivot->quantity;
        }

        return $totalAmount;
    }
}
