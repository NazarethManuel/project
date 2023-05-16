@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <br>
            <div class="col-md-11 ml-5 ">
                <h3 class="mt-4">Detalhe da Associação Entre Livro e Fornecedor</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe da Associação</li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.bookSupplier.list.index') }}">Lista de Associações</a></li>
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
                        Livros e Fornecedores Associados
                    </div>
                    <div claclsss="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Titúlo do Livro</th>
                                    <th>Nome do Fornecedor</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $bookSuppliers->book->title }}</td>
                                    <td>{{ $bookSuppliers->supplier->name }}</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @endsection
