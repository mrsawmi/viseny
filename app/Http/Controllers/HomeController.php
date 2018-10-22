<?php

namespace App\Http\Controllers;

use App\Models\tablo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablos = tablo::get();
        return view('viseny.index',compact('tablos'));
    }
}
