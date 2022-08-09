<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\BookService;

class BookController extends Controller
{
    public function index(Request $request)
    {
        return view('book.index');
    }

    public function search(BookService $bookService, Request $request)
    {
        $title = $request->input('title') ?? "";
        $author = $request->input('author') ?? "";
        $isbn = $request->input('isbn') ?? "";

        if (empty($title) && empty($author) && empty($isbn)) {
            return redirect('/');
        }

        $books = $bookService->SearchBook(
            $title,
            $author,
            $isbn
        );

        return view('book.index', compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store()
    {
        return view('book.index');
    }
}
