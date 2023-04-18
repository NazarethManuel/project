<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookSupplier;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $response['books'] = Book::orderBy('id', 'DESC')->get();
        return view('admin.book.list.index', $response);
    }


    public function create()
    {
        return view('admin.book.create.index');
    }

    public function store(Request $request)
    {
        $response = $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'publisher' => ' required',
            'isbn' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        Book::create($response);
        return redirect()->route('admin.book.create.index')->with('create', '1');
    }


    public function show($id)
    {
        $response['books'] =  Book::find($id);
        return view('admin.book.detail.index', $response);
    }

    public function edit($id)
    {
        $response['book'] = Book::find($id);
        return view('admin.book.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $response = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => ' required',
            'isbn' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);
        Book::find($id)->update($response);
        return redirect()->route('admin.book.list.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $record = Book::find($id);
        $exists = BookSupplier::where('fk_books_id', $record->id)->exists();
        if ($exists) {
            BookSupplier::where($record['fk_books_id'])->delete();
        }
        $record->delete();
        return redirect()->route('admin.book.list.index')->with('destroy', '1');
    }
}
