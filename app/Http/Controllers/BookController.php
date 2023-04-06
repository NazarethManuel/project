<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.home');

    }

    public function list()
    {       
        $books = Book::all();
        return view('admin.books.list', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title', 'author','publisher','isbn','quantity','price' => 'required'
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->isbn = $request->isbn;
        $book->quantity = $request->quantity;
        $book->price = $request->price;
        $book->save();
        return view('admin.books.create');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $books = Book::find($id);
        return view('admin.books.edit', compact('books'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title', 'author','publisher','isbn','quantity','price' => 'required'
        ]);
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->isbn = $request->isbn;
        $book->quantity = $request->quantity;
        $book->price = $request->price;
        $book->save();
        return view('admin.books.edit');
    }

    public function destroy($id)
    {
        
    }
}
