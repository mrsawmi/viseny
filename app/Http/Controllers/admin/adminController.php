<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Models\User;

class adminController extends Controller
{
    public function index()
    {
        return view('layout.admin');
    }

    public function list()
    {
        return view('layout.list');
    }
}
