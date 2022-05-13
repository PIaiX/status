<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::where('status', 1)->paginate(10);
        return view('auth.orders.index', compact('orders'));
    }
    
    public function show($orderId)
    {
        $order = Order::find($orderId);
        return view('auth.orders.show', compact('order'));
    }

    public function delete($orderId)
    {
        $order = Order::find($orderId);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
