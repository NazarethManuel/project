<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Costumer;
use App\Models\Sale;
use Illuminate\Http\Request;

class CostumerController extends Controller
{

    public function index()
    {
        $response['costumer'] = Costumer::orderBy('id', 'DESC')->get();
        return view('admin.costumer.list.index', $response);
    }

    public function create()
    {
        return view('admin.costumer.create.index');
    }


    public function store(Request $request)
    {
        $exist= Costumer::where('name', $request->name)->first();

        if ($exist) {
            return redirect()->back()->with('existing_cadast', '1');
        }
        $response = $this->validate($request, [
            'name' => 'required|max:150',
            'telephone' => 'required|max:150',
            'type' => 'required|in:Empresa,Independente'
        ],[
            'name.required'=>'Digite o Nome do cliente',
            'telephone.required'=>'Digite o contacto do cliente',
            'type.required'=>'Selecione o tipo de cliente'
        ]);

        Costumer::create($response);
        return redirect()->route('admin.costumer.create.index')->with('create', '1');
    }


    public function show($id)
    {
        $response['costumer'] = Costumer::find($id);
        return view('admin.costumer.detail.index', $response);

    }


    public function edit($id)
    {
        $response['costumer'] = Costumer::find($id);
        return view('admin.costumer.edit.index', $response);

    }


    public function update(Request $request, $id)
    {
        $response=$request->validate([
            'name' => 'required|max:150',
            'telephone' => 'required|max:150',
            'type' => 'required|in:Empresa,Independente',
        ],[
            'name.required'=>'Digite o Nome do cliente',
            'telephone.required'=>'Digite o contacto do cliente',
            'type.required'=>'Selecione o tipo de cliente'
        ]);
        Costumer::find($id)->update($response);
        return redirect()->route('admin.costumer.list.index')->with('edit', '1');

    }

    public function destroy($id)
    {
        $record =  Costumer::find($id);

        //Sale_relation
        $exists = Sale::where('fk_costumers_id', $record->id)->exists();

        if ($exists) {

            if($record->book->count()>0 && $record->user->count()>0 && $record->typePayment->count()>0){

                return redirect()->back()->with('deleteBook', '1');

            }

            Sale::where($record['fk_costumers_id'])->delete();
        }

        Costumer::find($id)->delete();

        return redirect()->route('admin.costumer.list.index')->with('destroy', '1');

    }
}
