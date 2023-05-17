@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Detalhe do Usuário</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe do Usuário </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.employer.list.index') }}">
                        lista de Usuários</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Principal</a></li>
                </ol>
            </div>
            <hr>

            <div class="container-fluid px-4">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Detalhe do Usuário
                    </div>
                    <div claclsss="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Nome do Usuário</th>
                                    <th>Contacto</th>
                                    <th>Morada</th>
                                    <th>Email</th>
                                    <th>NIF</th>
                                    <th>Função</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{ $employer->name}}</td>
                                    <td>{{ $employer->telephone }}</td>
                                    <td>{{ $employer->address }}</td>
                                    <td>{{ $employer->email}}</td>
                                    <td>{{ $employer->nif}}</td>
                                    <td>{{ $employer->role}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
