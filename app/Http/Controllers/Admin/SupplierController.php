<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $response['supplier'] = Supplier::orderBy('id', 'DESC')->get();
        return view('admin.supplier.list.index', $response);
    }

    public function create()
    {
        return view('admin.supplier.create.index');
    }

    public function store(Request $request)
    {

        $response = $this->validate($request, [
            'title' =>'required',
            'telephone' => 'required',
            'manager' => 'required',
            'nif' =>'required',
            'email' =>'required'
        ]);

        Supplier::create($response);
        return redirect()->route('admin.supplier.create.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['supplier'] = Supplier::find($id);
        return view('admin.supplier.detail.index', $response);
    }

    public function edit($id)
    {
        $response['supplier'] = Supplier::find($id);
        return view('admin.supplier.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $response=$request->validate([
            'title' => 'required',
            'telephone' => 'required',
            'manager' => 'required',
            'nif' => 'required',
            'email' => 'required'
        ]);
        Supplier::find($id)->update($response);
        return redirect()->route('admin.supplier.list.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return redirect()->route('admin.supplier.list.index')->with('destroy', '1');
    }
}
