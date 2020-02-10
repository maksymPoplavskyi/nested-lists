<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereParentId(0)->get();

        return view('welcome', compact('categories'));
    }
}
