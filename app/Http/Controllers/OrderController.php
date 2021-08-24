<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
class OrderController extends Controller
{
    public function store(Request $request)
    {
        $orden = new Order();
        $orden->user_id = Auth::user()->id;
        $orden->save();

        return redirect()->back();
    }
    public function consultaVenta(Order $order){
        $orden = Order::find($order->order_id = 2);
        $ord = $orden->products()->get();
        dd($ord);
    }
}
