<?php

namespace App\Http\Controllers\admin;

use App\Models\Factor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FactorController extends Controller
{
    public function index()
    {
        $factors = Factor::get();
        return view('factors.list', compact('factors'));
    }

    public function confirm(Request $request,$factor_id)
    {
        $factor = Factor::find($factor_id);
        if ($factor && $factor instanceof Factor) {
            if ($request->input('confirmValue') != $factor->factor_order_product_status) {
                $factorData = [
                    'factor_order_product_status' => 1
                ];
                $updateResult = $factor->update($factorData);
                if ($updateResult) {
                    return back()->with('status', 'فاکتور تایید شد...!');
                }
            }
        }
    }
}
