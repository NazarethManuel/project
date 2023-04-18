@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Painel Principal</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Fornecedor</li>
            </ol>

            <div class="container-fluid px-4">
                <h1 class="mt-4">Lista de Fornecedores</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Fornecedores Cadastrados
                    </div>
                    <div claclsss="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Nome Fornecedor</th>
                                    <th>Contacto</th>
                                    <th>Gerente</th>
                                    <th>NIF</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $supplier->name }}</td>
                                    <td>{{ $supplier->telephone }}</td>
                                    <td>{{ $supplier->manager }}</td>
                                    <td>{{ $supplier->nif }}</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="{{route('admin.supplier.list.index')}}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
              </svg>
                </svg><span class="text-primary"> Voltar</span>
            </a>
        </div>

    </main>

    @endsection
