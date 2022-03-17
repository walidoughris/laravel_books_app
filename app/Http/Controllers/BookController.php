<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function Index(){
       $last_added_books = Book::orderByDesc('publised_date')->take(20)->get();
       //Carbon::setLocale('ar');
        //echo Carbon::parse($last_added_books[0]->publised_date)->translatedFormat('M Y');
        //$t->setLocale('ar');
        //echo $t->translatedFormat('F Y');
        //echo $t->format('F Y');
        //echo $t->diffForHumans();
        return view('index',['last_added_books'=>$last_added_books]);
    }
    
    public function ShowBookDetailes($id){
        $book = Book::findOrFail($id);
       return view('book_detailes',['book'=>$book]);
    }

    public function ShowBookComments($id){
        $book = Book::findOrFail($id);
       return view('book_comments',['book'=>$book]);
    }
}
