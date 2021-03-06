<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use Lenius\Basket\Facades\Basket;

class ProductController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the basket.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ecommerce.products')->with(['products' => $this->products->all()]);
    }

    /**
     * Return single product
     *
     * @return \Illuminate\Http\Response
     */
    public function item($id)
    {
        return view('ecommerce.product')->with(['product' =>$this->products->firstWhere('id', $id)]);
    }

    /**
     * Return products
     *
     * @return \Illuminate\Http\Response
     */
    public function items()
    {
        return $this->products->all();
    }
}