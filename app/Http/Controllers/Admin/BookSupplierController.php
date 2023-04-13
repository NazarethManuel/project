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
        $response['bookSupplier'] = Book::get();
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

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
