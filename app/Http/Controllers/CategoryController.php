<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        return view('categories', [
        'title' => 'Post Category',
        'categories' => Category::latest()->paginate(3)
    ]);
    }
}
