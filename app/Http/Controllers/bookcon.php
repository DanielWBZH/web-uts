<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use Illuminate\Http\Request;

class bookcon extends Controller
{
        public function all(){
            $book = book::all();
            $data = ['books' => $book, 'categories' => Category::all()];
            return view('home/home', compact('data'));
        }

        public function view($id){
            $book = Book::where('id', '=', $id)->first();
            $data = ['book' => $book, 'categories' => Category::all()];
            return view('book/book', compact('data'));
        }

        public function contact()
        {
        $data = ['categories' => category::all()];
        return view('home/contact', compact('data'));
        }
}
