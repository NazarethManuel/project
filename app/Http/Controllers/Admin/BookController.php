<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookSupplier;
use App\Models\Sale;
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
        $exist = Book::where('isbn', $request->isbn)->first();

        if ($exist) {
            return redirect()->back()->with('existing_cadast', '1');
        }
        $response = $request->validate([
            'title' => 'required|max:150',
            'author' => 'required|max:150',
            'publisher' => ' required|max:150',
            'isbn' => 'required|min:13|max:13',
            'startingAmount' => 'required|numeric',
            'finalQuantity',
            'purchasePrice' => 'required|numeric',
            'salePrice' => 'required|numeric'

        ], [
            'title.required' => 'Digite o título do livro',
            'author.required' => 'Digite o Autor do livro',
            'publisher.required' => 'Digite a editora do livro',
            'isbn.required' => 'Digite o isbn do livro',
            'startingAmount.required' => 'Digite a quantidade de livro',
            'purchasePrice.required' => 'Digite o preço de compra do livro',
            'salePrice.required' => 'Digite o preço de venda do livro'
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
            'title' => 'required|max:150',
            'author' => 'required|max:150',
            'publisher' => ' required|max:150',
            'isbn' => 'required|max:150',
            'startingAmount' => 'required|numeric',
            'purchasePrice' => 'required|numeric',
            'salePrice' => 'required|numeric'

        ], [
            'title.required' => 'Digite o título do livro',
            'author.required' => 'Digite o Autor do livro',
            'publisher.required' => 'Digite a editora do livro',
            'isbn.required' => 'Digite o isbn do livro',
            'startingAmount.required' => 'Digite a quantidade de livro',
            'purchasePrice.required' => 'Digite o preço de compra do livro',
            'salePrice.required' => 'Digite o preço dde venda do livro'
        ]);
        Book::find($id)->update($response);
        return redirect()->route('admin.book.list.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $record = Book::find($id);

        //BookSupplier_relation
        $exists = BookSupplier::where('fk_books_id', $record->id)->exists();

        if ($exists) {

            if ($record->supplier->count() > 0) {

                return redirect()->back()->with('deleteBook', '1');
            }

            BookSupplier::where($record['fk_books_id'])->delete();
        }

        //Sale_relation
        $exists = Sale::where('fk_books_id', $record->id)->exists();
        if ($exists) {

            if ($record->costumer->count() > 0 && $record->employer->count() > 0 && $record->typePayment->count() > 0) {

                return redirect()->back()->with('deleteBook', '1');
            }
            sale::where($record['fk_books_id'])->delete();
        }

        Book::find($id)->delete();

        return redirect()->route('admin.book.list.index')->with('destroy', '1');
    }


    public function getBookById($id)
    {
        $books = Book::find($id);
        return response()->json($books);
    }
}
