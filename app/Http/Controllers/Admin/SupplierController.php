<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookSupplier;
use App\Models\Sale;
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
            'name' => 'required |max:150',
            'telephone' => 'required|max:150',
            'manager' => 'required|max:150',
            'nif' => 'required|max:150',
            'email' => 'required|email',
            'type' => 'required|in:Empresa,Independente'
        ], [
            'name.required' => 'Digite o Nome do fornecedor',
            'telephone.required' => 'Digite o contacto do fornecedor',
            'manager.required' => 'Digite o nome do Gerente',
            'nif.required' => 'Digite o nif do fornecedor',
            'email.required' => 'Digite o email',
            'type.required' => 'Selecione o tipo de Fornecedor'
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
        $response = $request->validate([
            'name' => 'required |max:150',
            'telephone' => 'required|max:150',
            'manager' => 'required|max:150',
            'nif' => 'required|max:150',
            'email' => 'required|email',
            'type' => 'required|in:Empresa,Independente'
        ], [
            'name.required' => 'Digite o Nome do fornecedor',
            'telephone.required' => 'Digite o contacto do fornecedor',
            'manager.required' => 'Digite o nome do Gerente',
            'nif.required' => 'Digite o nif do fornecedor',
            'email.required' => 'Digite o email',
            'type.required' => 'Selecione o tipo de Fornecedor'
        ]);
        Supplier::find($id)->update($response);
        return redirect()->route('admin.supplier.list.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $record = Supplier::find($id);

        $exists = BookSupplier::where('fk_suppliers_id', $record->id)->exists();

        if ($exists) {
            //BookSupplier::where($record['fk_suppliers_id'])->delete();
            echo $exists;
        }
        //$record->delete();
        //return redirect()->route('admin.supplier.list.index')->with('destroy', '1');
    }
}
