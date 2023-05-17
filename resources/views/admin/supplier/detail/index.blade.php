@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Detalhe do Fornecedor</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe do Fornecedor</li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.supplier.list.index') }}">Listar Fornecedores</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Principal</a></li>
                </ol>
            </div>
            <hr>

            <div class="container-fluid px-4">

                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div claclsss="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome Fornecedor</th>
                                <th>Nº Telefone</th>
                                <th>Gerente</th>
                                <th>NIF</th>
                                <th>Tipo de Fornecedor</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->telephone }}</td>
                                <td>{{ $supplier->manager }}</td>
                                <td>{{ $supplier->nif }}</td>
                                <td>{{ $supplier->type }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>            
            </div>
        </div>
    </main>

    @endsection