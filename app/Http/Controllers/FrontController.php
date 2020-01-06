<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class FrontController extends Controller
{
    public function index() {
        $books = Book::paginate(5);
        return view('front/index', ['books' => $books]);
    }

    public function show($id) {
        $book = Book::find($id);
        return view('/front/show', ['book' => $book]);
    }

    
}
