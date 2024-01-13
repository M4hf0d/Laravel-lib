<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\books;
class BooksController extends Controller
{

    public function searchForm()
    {
        return view('books.index');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('query');
        $books = books::where('title', 'LIKE', '%' . $searchTerm . '%')->get();
        return view('books.result', ['books' => $books]);
    }
    
    
}

