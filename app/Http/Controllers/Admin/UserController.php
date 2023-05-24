<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function index()
    {
        $response['users']= User::get();
        return view('Admin.user.list.index', $response);

    }


    public function create()
    {
        return view('admin.user.create.index');

    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|max:150',
            'password_confirmation' => 'required|string',
        ]);

        $validator->sometimes('password_confirmation', Rule::in([$request->input('password')]), function ($input) {
            return $input->password !== null;
        });

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $response = $request->validate([
            'name' => 'required|max:150',
            'contact1' => 'required|max:150',
            'address' => 'required|max:150',
            'nif' => 'required|max:150',
            'email'=> 'required|email|unique:users',
            'password' => 'required|string|max:150',


        ], [
            'name.required' => 'Digite o nome do utilizador',
            'contact1.required' => 'Digite o contacto',
            'address.required' => 'Digite a morada',
            'nif.required' => 'Digite o nif',
            'email.required' => 'Digite o email',
            'password.required' => 'Digite uma palavra passe',
        ]);

        User::create($response);
        return redirect()->route('admin.user.create.index')->with('create', '1');
    }


    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
