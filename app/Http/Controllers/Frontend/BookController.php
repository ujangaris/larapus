<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('frontend.book.index', [
            'books' => $books,
        ]);
    }

    public function show(Book $book)
    {
        return view('frontend.book.show', [
            'book' => $book,
        ]);
    }

    public function borrow(Book $book)
    {
        $user = auth()->user();

        if ($user->borrow()->where('book_id', $book->id)->count() > 0) {
            return redirect()->back()->with('toast', 'kamu sudah meminjam buku dengan judul: ' . $book->title);
        }

        $user->borrow()->attach($book);

        /* funsi mengurasi jumlah buku */
        $book->decrement('qty');

        return redirect()->back()->with('toast', 'Berhasil meminjam buku!');
    }
}
