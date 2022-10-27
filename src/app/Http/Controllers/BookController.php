<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BookRequest;
use App\Services\BookService;

class BookController extends Controller
{
    public function index(Request $request)
    {
        return view('book.index');
    }

    public function search(BookRequest $request, BookService $bookService)
    {
        $books = $bookService->SearchBook(
            $request->input('title'),
            $request->input('author'),
            $request->input('isbn'),
        );

        return view('book.index', compact('books'));
    }
}
