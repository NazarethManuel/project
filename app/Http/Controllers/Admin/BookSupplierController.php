<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Supplier;
use App\Models\BookSupplier;
use Illuminate\Http\Request;

class BookSupplierController extends Controller
{

    public function index()
    {
        $response['bookSuppliers'] = BookSupplier::orderBy('id', 'Desc')->get();
        return view('admin.bookSupplier.list.index', $response);
    }

    public function create()
    {

        $response['books'] = Book::get();
        $response['suppliers'] = Supplier::get();
        $response['bookSuppliers'] = BookSupplier::get();
        return view('admin.bookSupplier.create.index', $response);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fk_books_id' => 'required',
            'fk_suppliers_id' => 'required'
        ],[
            'fk_books_id.required'=>'Selecione o Livro',
            'fk_suppliers_id.required'=>'Selecione o forncedor'
        ]);

        BookSupplier::create($data);
        return redirect()->route('admin.bookSupplier.create.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['books'] = Book::get();
        $response['suppliers'] = Supplier::get();
        $response['bookSuppliers'] = BookSupplier::find($id);
        return view('admin.bookSupplier.detail.index', $response);
    }

    public function edit($id)
    {
        $response['books'] = Book::get();
        $response['suppliers'] = Supplier::get();
        $response['bookSuppliers'] = BookSupplier::find($id);
       return view('admin.bookSupplier.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'fk_books_id' => 'required',
            'fk_suppliers_id' => 'required'
        ],[
            'fk_books_id.required'=>'Selecione o Livro',
            'fk_suppliers_id.required'=>'Selecione o forncedor'
        ]);

       BookSupplier::find($id)->update($data);
    return redirect()->route('admin.bookSupplier.list.index', $data)->with('update', '1');
    }


    public function destroy($id)
    {

        BookSupplier::find($id)->delete();
        return redirect()->route('admin.bookSupplier.list.index')->with('destroy', '1');
    }
}
