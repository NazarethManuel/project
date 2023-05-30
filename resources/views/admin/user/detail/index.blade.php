@extends('layouts.merge.dashboard')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="col-md-11 ml-5">
                <br>
                <h3 class="mt-4">Detalhe do usuário </h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe do usuário </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.user.list.index') }}">Lista de Usuários </a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Inicial</a></li>
                </ol>
            </div>
            <hr>

            <div class="container-fluid px-4">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div claclsss="card-body">
                        <table id="tableSimple" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Contacto</th>
                                    <th>Morada</th>
                                    <th>NIF</th>
                                    <th>Email</th>
                                    <th>Função</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->contact1 }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->nif }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role_as }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>

    @endsection


