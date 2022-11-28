<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categorycon extends Controller
{
    public function all()
    {
        return category::all();
    }

    public function view($id)
    {
        $category = category::where('id', '=', $id)->first();
        $data = ['category' => $category, 'categories' => category::all()];
        return view('category/category', compact('data'));
    }
}
