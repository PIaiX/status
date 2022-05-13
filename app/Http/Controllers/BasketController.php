<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::find($orderId);
            session(['ordersCount' => $order->getCountOrders()]);
        }

        $order = Order::find($orderId);

        return view('basket.index', compact('order'));
    }

    /**
     * Add to cart
     *
     * @param $id
     * @return void
     */
    public function basketAdd($id)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($id)) {
            $pivotRow = $order->products()->where('product_id', $id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($id);
        }

        if (Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }

        return redirect()->route('basket');
    }

    public function basketRemove($id)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return view('basket', compact('order'));
        }

        $order = Order::find($orderId);

        if ($order->products->contains($id)) {
            $pivotRow = $order->products()->where('product_id', $id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return redirect()->route('basket');
    }

    /**
     * Жестко удалить товар
     *
     * @param $id
     * @return void
     */
    public function basketTrash($id)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return view('basket', compact('order'));
        }

        $order = Order::find($orderId);

        if ($order->products->contains($id)) {
            $order->products()->detach($id);
        }

        return redirect()->route('basket');
    }

    public function basketOrder()
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect()->route('index');
        }

        $order = Order::findOrFail($orderId);

        return view('basket-order', compact('order'));
    }

    /**
     * Переход на страницу оформления заказа
     * @return void
     */
    public function basketPlace()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('basket.order', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect()->route('catalog');
        }

        $order = Order::findOrFail($orderId);
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->comment = $request->comment;
        $order->status = 1;
        $order->save();
        session()->forget('orderId');
        session()->forget('ordersCount');
        return redirect()->route('catalog');
    }
}
