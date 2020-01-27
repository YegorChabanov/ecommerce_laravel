<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('index', 'show');
        $this->middleware('auth')->only('create', 'store');
    }

    public function index()
    {
        $orders = Order::all();

        return view('orders.all_orders')->with('orders', $orders);
    }

    public function show(Order $id)
    {
        $order = Order::find($id)->first();
        $totalAmount = Order::getOrderTotalAmount($id);

        return view('orders.index')->with(compact('order', 'totalAmount'));
    }

    public function create()
    {
        $cartArray = Cart::getCartWithProducts();
        $totalPrice = Cart::getTotalPriceOfCartProducts();

        return view('cart.checkout')->with(compact('cartArray', 'totalPrice'));
    }

    public function store (OrderRequest $request)
    {
        $order = Order::create($request->all() + ['user_id' => Auth::user()->id]);
        $cart = Cart::getCartArray();

        foreach ($cart as $productId => $quantity) {
            $order->products()->attach($productId, ['quantity' => $quantity]);
        }

        return redirect('/')->withCookie('cart', json_encode([]))->with(['status'=> 'Thank you! Your order was completed successfully!']);
    }
}
