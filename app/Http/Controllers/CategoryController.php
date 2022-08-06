<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
 public function view_category($name){
$book=Category::all();
return view('categories.index',compact('book'));
}
    public function show($id){
        $category=Category::findOrFail($id);
        return view('categories.show_categories',compact('category'));
    }
}
