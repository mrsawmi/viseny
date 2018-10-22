<?php

namespace App\Http\Controllers;

use App\Models\tablo;
use Illuminate\Http\Request;

class tabloController extends Controller
{
    public function index()
    {

        $tablos = tablo::get();
        return view('products.custom',compact('tablos'));
    }

    public function create()
    {

    }

    public function store()
    {

    }
}
