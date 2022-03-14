<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $last_added_books = Book::all();
        return view('index',['last_added_books'=>$last_added_books]);
    }
}
