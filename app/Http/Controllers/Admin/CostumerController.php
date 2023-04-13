<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Costumer;
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
        $response = $this->validate($request, [
            'title' => 'required',
            'telephone' => 'required'
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
            'title' => 'required',
            'telephone' => 'required',
        ]);
        Costumer::find($id)->update($response);
        return redirect()->route('admin.costumer.list.index')->with('edit', '1');

    }


    public function destroy($id)
    {
        Costumer::find($id)->delete();
        return redirect()->route('admin.costumer.list.index')->with('destroy', '1');

    }
}
