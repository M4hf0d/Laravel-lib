<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\StudentController; //add the ControllerNameSpace
use App\Http\Controllers\BooksController;

Route::resource("/student", StudentController::class);
Route::view('/', 'books.home');

Route::get('/books/search', [BooksController::class, 'searchForm'])->name('books.searchForm');
Route::post('/books/search', [BooksController::class, 'search'])->name('books.search');