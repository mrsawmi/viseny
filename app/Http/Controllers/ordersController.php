<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\tablo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ordersController extends Controller
{
    public function index()
    {
        $orders = order::with('user', 'tablo')->get();
        return view('orders.list', compact('orders'));
    }

    public function store(Request $request)
    {
        dd($request);
//        if (Auth::check) {
        order::create([
            'order_tablo_id' => $request->input('orderID'),
            'order_user_id' => $request->id(),
            'order_amount' => $request->input('tabloPrice'),

        ]);
//        }
    }
}
