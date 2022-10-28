<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Services\BookService;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create(Request $request,BookService $bookService,$volume_id)
    {
        $book = $bookService->GetBook($volume_id);

        return view('book.create',['book' => $book]);
    }

    public function store(Request $request)
    {
        if(Auth::check())
        {
            $review = new Review();

            $review->volume_id = $request->volume_id;
            $review->user_id = Auth::id();
            $review->comment = $request->comment;
    
            $review->save();
        }

        return view('book.index');
    }
}
