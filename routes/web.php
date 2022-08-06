<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get("/books",[BookController::class,"index"]);
Route::get("/books/show/{id}",[BookController::class,"show"]);
Route::get("/books/category/{name}",[CategoryController::class,"view_category"]);
Route::get('/books/category/show_categories/{id}',[CategoryController::class,"show"]);
