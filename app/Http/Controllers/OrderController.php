<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Services\OrderService;
use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $cartService;
    protected $orderService;

    public function __construct(CartService $cartService, OrderService $orderService)
    {
        $this->middleware('admin')->only('index', 'show');
        $this->middleware('auth')->only('create', 'store');

        $this->cartService = $cartService;
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = Order::all();

        return view('orders.all_orders')->with('orders', $orders);
    }

    public function show(Order $id)
    {
        $order = Order::find($id)->first();
        $totalAmount = $this->orderService->getOrderTotalAmount($order);

        return view('orders.index')->with(compact('order', 'totalAmount'));
    }

    public function create()
    {
        $cartArray = $this->cartService->getCartWithProducts();
        $totalPrice = $this->cartService->getTotalPriceOfCartProducts();

        return view('cart.checkout')->with(compact('cartArray', 'totalPrice'));
    }

    public function store (OrderRequest $request)
    {
        $order = Order::create($request->all() + ['user_id' => Auth::user()->id]);
        $cart = $this->cartService->getCartArray();

        foreach ($cart as $productId => $quantity) {
            $order->products()->attach($productId, ['quantity' => $quantity]);
        }

        return redirect('/')->withCookie('cart', json_encode([]))->with(['status'=> 'Thank you! Your order was completed successfully!']);
    }
}
