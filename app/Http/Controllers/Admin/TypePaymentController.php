<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller
{

    public function index()
    {
        $response['typePayment'] = TypePayment::orderBy('id', 'DESC')->get();
        return view('admin.typePayment.list.index', $response);
    }


    public function create()
    {
        return view('admin.typePayment.create.index');
    }


    public function store(Request $request)
    {
        $response = $this->validate($request, [
            'type' => 'required|max:150'
        ],[
            'type.required'=>'Digite o Tipo de Pagamento'
        ]);

        TypePayment::create($response);
        return redirect()->route('admin.typePayment.create.index')->with('create', '1');
    }


    public function show($id)
    {
        $response['typePayment'] = TypePayment::find($id);
        return view('admin.typePayment.detail.index', $response);

    }


    public function edit($id)
    {
        $response['typePayment'] = TypePayment::find($id);
        return view('admin.typePayment.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $response = $this->validate($request, [
            'type' => 'required|max:150'
        ],[
            'type.required'=>'Digite o Tipo de Pagamento'
        ]);
        TypePayment::find($id)->update($response);
        return redirect()->route('admin.typePayment.list.index')->with('create', '1');

    }


    public function destroy($id)
    {
        TypePayment::find($id)->delete();
        return redirect()->route('admin.typePayment.list.index')->with('destroy', '1');

    }
}
