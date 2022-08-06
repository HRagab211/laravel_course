<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $all = Book::orderBy('id','DESC')->paginate(2);
        return view('Books/index',compact('all'));
    }
    public function show($id){
        $book = Book::findOrFail($id);
        return view("Books.show",compact('book'));
    }
}
