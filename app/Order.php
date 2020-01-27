<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'first_name', 'last_name', 'phone', 'address', 'zip', 'comment'];

    public static function getOrderTotalAmount(Order $id)
    {
        $order = Order::find($id)->first();
        $totalAmount = 0;
        foreach ($order->products as $product) {
            $totalAmount += $product->price * $product->pivot->quantity;
        }

        return $totalAmount;
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
