<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\publisher;
use Illuminate\Http\Request;

class publishercon extends Controller
{

    public function index()
    {
        $publishers = publisher::all();
        $data = ['allpublisher' => $publishers, 'categories' => category::all()];
        return view('publisher/allpublisher', compact('data'));
    }

    public function show($id)
    {
        $publisher = publisher::where('id', '=', $id)->first();
        $data = ['publisher' => $publisher, 'categories' => category::all()];
        return view('publisher/publisher', compact('data'));
    }

    //
}
