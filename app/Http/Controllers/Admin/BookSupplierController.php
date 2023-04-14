<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookSupplier;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BookSupplierController extends Controller
{

    public function index()
    {
        $response['books'] = Book::get();
        $response['suppliers'] = Supplier::get();
        $response['bookSupplier'] = BookSupplier::get();
        return view('admin.bookSupplier.list.index', $response);
    }


    public function create()
    {
        $response['books'] = Book::get();
        $response['bookSupplier'] = BookSupplier::get();
        $response['suppliers'] = Supplier::get();

        return view('admin.bookSupplier.create.index', $response);
    }


    public function store(Request $request)
    {
        $response = $this->validate($request, [
            'fk_books_id' => 'required',
            'fk_suppliers_id' => 'required'
        ]);

        BookSupplier::create($response);
        return redirect()->route('admin.bookSupplier.create.index')->with('create', '1');
    }


    public function show($id)
    {
        $response['bookSupplier'] = BookSupplier::find($id);
        return view('admin.bookSupplier.detail.index', $response);
    }


    public function edit($id)
    {
        $response['bookSupplier'] = BookSupplier::find($id);

    return view('admin.bookSupplier.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $response = $this->validate($request, [
            'fk_books_id' => 'required',
            'fk_suppliers_id' => 'required'
        ]);

        BookSupplier::find($id);
        return redirect()->route('admin.bookSupplier.create.index', $response)->with('update', '1');
    }


    public function destroy($id)
    {
        BookSupplier::find($id)->delete();
        return redirect()->route('admin.bookSupplier.list.index')->with('destroy', '1');
    }
}
