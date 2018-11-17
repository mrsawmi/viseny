<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use App\Models\order;
use App\Models\tablo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ordersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    public function index()
    {
        $orders = order::with('user', 'tablo')->get();
        return view('orders.list', compact('orders'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->user_id;
            $userFullName = Auth::user()->user_fullName;
            order::create([
                'order_tablo_id' => $request->input('orderID'),
                'order_user_id' => $user_id,
                'order_amount' => $request->input('tabloPrice'),
            ]);
            Factor::create([
                'factor_order_id' => $request->input('orderID'),
                'factor_user_fullName' => $userFullName,
                'factor_price' => $request->input('tabloPrice'),
                'factor_product_id' => $request->input(),
                'factor_order_product_status' => 0,
                'factor_product_id' => 1,
            ]);
        } else
            return redirect()->route('login');
    }

    public function confirm(Request $request, $order_id)
    {
        $order = order::find($order_id);
        if ($order && $order instanceof order) {
            if ($request->input('confirmValue') != $order->order_status) {
                $orderData = [
                    'order_status' => 1
                ];
                $updateResult = $order->update($orderData);
                if ($updateResult) {
                    return back()->with('status', 'دیدگاه اکنون قابل مشاهده است!');
                }
            }
        }
    }
}
