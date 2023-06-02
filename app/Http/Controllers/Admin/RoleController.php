<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $response['role'] = Role::orderBy('id', 'DESC')->get();
        return view('admin.role.list.index', $response);
    }


    public function create()
    {
        return view('admin.role.create.index');
    }

    public function store(Request $request)
    {
        $response = $this->validate($request, [
            'name' => 'required|max:150',
            'type' => 'required|max:150'
        ],[
            'name.required'=>'Digite o Nome da Função',
            'type.required'=>'Selecione o tipo da função'
        ]);

        Role::create($response);
        return redirect()->route('admin.role.create.index')->with('create', '1');

    }

    public function show($id)
    {
        $response['role'] = Role::find($id);
        return view('admin.role.detail.index', $response);

    }

    public function edit($id)
    {
        $response['role'] = Role::find($id);
        return view('admin.role.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $response = $this->validate($request, [
            'name' => 'required|max:150',
            'type' => 'required|max:150'
        ],[
            'name.required'=>'Digite o Nome da Função',
            'type.required'=>'Selecione o tipo da função'
        ]);
        Role::find($id)->update($response);
        return redirect()->route('admin.role.list.index')->with('create', '1');

    }


    public function destroy($id)
    {
        Role::find($id)->delete();
        return redirect()->route('admin.role.list.index')->with('destroy', '1');

    }
}
