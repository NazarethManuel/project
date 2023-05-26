<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
     $response['users'] = User::get();
     return view('admin.user.list.index', $response);
    }


    public function create()
    {
        return view('admin.user.create.index');
    }


    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|max:15',
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:15',
        ], [
            'name.required' => 'Digite o nome do utilizador',
            'contact1.required' => 'Digite o contacto',
            'address.required' => 'Digite a morada',
            'nif.required' => 'Digite o nif',
            'email.required' => 'Digite o email',
            'password.required' => 'Digite uma palavra passe',
        ]);


        $hashedPassword = Hash::make($response['password']);

        $response['password'] = $hashedPassword;

        User::create($response);
        return redirect()->route('admin.user.create.index')->with('create', '1');
    }


    public function show($id)
    {
        $response['user'] = User::find($id);
        return view('admin.user.detail.index', $response);
    }


    public function edit($id)
    {
        $response['user'] = User::find($id);
        return view('admin.user.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $response = $request->validate([
            'name' => 'required|max:150',
            'contact1' => 'required|max:150',
            'address' => 'required|max:150',
            'nif' => 'required|max:150',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'required|min:8|max:15',
        ], [
            'name.required' => 'Digite o nome do utilizador',
            'contact1.required' => 'Digite o contacto',
            'address.required' => 'Digite a morada',
            'nif.required' => 'Digite o nif',
            'email.required' => 'Digite o email',
            'password.required' => 'Digite uma palavra passe',
        ]);

        User::find($id)->update($response);
        return redirect()->route('admin.user.list.index', ['id' => $id])->with('edit', '1');
    }


    public function destroy($id)
    {
        $record = User::find($id);
        //Sale_relation
        $exists = Sale::where('fk_users_id', $record->id)->exists();
        if ($exists) {

            if($record->costumer->count()>0 && $record->book->count()>0 && $record->typePayment->count()>0 ){

                return redirect()->back()->with('deleteBook', '1');
            }
            sale::where($record['fk_users_id'])->delete();
        }

        User::find($id)->delete();

        return redirect()->route('admin.user.list.index')->with('destroy', '1');
    }
}
