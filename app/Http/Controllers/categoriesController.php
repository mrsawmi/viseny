<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.list',compact('categories'));
    }
}
