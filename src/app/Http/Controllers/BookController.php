<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(Request $request)
    {
        return view('book.index');
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
