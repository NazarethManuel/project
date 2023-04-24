<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $response['payment'] = Payment::orderBy('id', 'DESC')->get();
        return view('admin.payment.list.index', $response);

    }
    public function create()
    {
        return view('admin.payment.create.index');

    }
    public function store(Request $request)
    {
        $response = $this->validate($request, [
            'type' => 'required|max:150'

        ],[
            'type.required'=>'Digite o tipo de pagamento'

        ]);

        Payment::create($response);
        return redirect()->route('admin.payment.create.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['payment'] = Payment::find($id);
        return view('admin.payment.detail.index', $response);

    }
    public function edit($id)
    {
        $response['payment'] = Payment::find($id);
        return view('admin.payment.edit.index', $response);

    }
    public function update(Request $request, $id)
    {
        $response = $this->validate($request, [
            'type' => 'required|max:150'

        ],[
            'type.required'=>'Digite o tipo de pagamento'

        ]);

        Payment::find($id)->update($response);
        return redirect()->route('admin.payment.list.index')->with('edit', '1');


    }
    public function destroy($id)
    {
        Payment::find($id)->delete();
        return redirect()->route('admin.payment.list.index')->with('destroy', '1');

    }
}
