@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Detalhe do Cliente</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe do Cliente </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.costumer.list.index') }}">
                            Listar Clientes</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Principal</a></li>
                </ol>
            </div>
            <hr>

            <div claclsss="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome do cliente</th>
                            <th>Contato</th>
                            <th>Tipo de Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $costumer->name}}</td>
                            <td>{{ $costumer->telephone }}</td>
                            <td>{{ $costumer->type }}</td>
                        </tr>


                    </tbody>
                </table>
            </div>


        </div>
    </main>
    @endsection