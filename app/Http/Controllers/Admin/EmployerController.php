<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\Sale;
use Illuminate\Http\Request;

class EmployerController extends Controller
{

    public function index()
    {
        $response['employer'] = Employer::orderBy('id', 'DESC')->get();
        return view('admin.employer.list.index', $response);
    }


    public function create()
    {

        return view('admin.employer.create.index');
    }


    public function store(Request $request)
    {
        $exist= Employer::where('nif', $request->nif)->first();
        
        if ($exist) {
            return redirect()->back()->with('existing_cadast', '1');
        }
        $response = $this->validate($request, [
            'name' => 'required|max:150',
            'telephone' => 'required|max:150',
            'address' => 'required|max:150',
            'email' => 'required|email',
            'nif' => 'required|max:150',
            'role'=>'required|in:Administrador,Operador'
        ], [
            'name.required' => 'Digite o Nome do Funcionário',
            'telephone.required' => 'Digite o contacto do Funcionário',
            'address.required' => 'Digite a Morada do Funcionário',
            'email.required' => 'Digite o Email do Funcionário',
            'nif.required' => 'Digite o Nif do Funcionário',
            'role.required' => 'Digite a função do Funcionário'
        ]);

        Employer::create($response);
        return redirect()->route('admin.employer.create.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['employer'] = Employer::find($id);
        return view('admin.employer.detail.index', $response);
    }

    public function edit($id)
    {
        $response['employer'] = Employer::find($id);
        return view('admin.employer.edit.index', $response);
    }
    public function update(Request $request, $id)
    {
        $response = $this->validate($request, [
            'name' => 'required|max:150',
            'telephone' => 'required|max:150',
            'address' => 'required|max:150',
            'email' => 'required|email',
            'nif' => 'required|max:150',
            'role'=> 'required|in:Administrador,Operador'
        ], [
            'name.required' => 'Digite o Nome do Funcionário',
            'telephone.required' => 'Digite o contacto do Funcionário',
            'address.required' => 'Digite a Morada do Funcionário',
            'email.required' => 'Digite o Email do Funcionário',
            'nif.required' => 'Digite o Nif do Funcionário',
            'role.required' => 'Digite a função do Funcionário'
        ]);

        Employer::find($id)->update($response);
        return redirect()->route('admin.employer.list.index')->with('create', '1');
    }


    public function destroy($id)
    {
        $record=Employer::find($id);

        //Sale_relation
        $exists = Sale::where('fk_costumers_id', $record->id)->exists();

        if ($exists) {

            if($record->book->count()>0 && $record->costumer->count()>0 && $record->typePayment->count()>0){

                return redirect()->back()->with('deleteBook', '1');

            }

            Sale::where($record['fk_employers_id'])->delete();
        }
        return redirect()->route('admin.employer.list.index')->with('destroy', '1');
    }
}
