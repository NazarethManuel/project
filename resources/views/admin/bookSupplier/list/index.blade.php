@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Painel Principal</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Clientes</li>
            </ol>

            <div class="container-fluid px-4">
                <h1 class="mt-4">Lista de Clientes</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Livros e Fornecedores associados
                    </div>
                    <div claclsss="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Titúlo do Livro</th>
                                    <th>Nome do Fornecedor</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookSupplier as $BookSupplier)
                                <tr>
                                    <td>{{ $BookSupplier->book->title }}</td>
                                    <td>{{ $BookSupplier->supplier->title }}</td>

                                    <td>
                                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" id="navbardropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas  fa-fw"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbardropdown">

                                                    <li>
                                                        <a href="{{route('admin.bookSupplier.edit.index', $BookSupplier->id )}}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentcolor" class="bi bi-pencil-square" viewbox="0 0 16 16">
                                                                <path d="m15.502 1.94a.5.5 0 0 1 0 .706l14.459 3.69l-2-2l13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2l4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd" d="m1 13.5a1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5h9a.5.5 0 0 0 0-1h2.5a1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg><span class="text-primary"> editar</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('admin.bookSupplier.show', $BookSupplier->id)}}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentcolor" class="bi bi-eye-fill" viewbox="0 0 16 16">
                                                                <path d="m10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                <path d="m0 8s3-5.5 8-5.5s16 8 16 8s-3 5.5-8 5.5s0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                            </svg><span class="text-second"> detalhe</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('admin.bookSupplier.destroy', $BookSupplier->id)}}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentcolor" class="bi bi-trash3-fill" viewbox="0 0 16 16">
                                                                <path d="m11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66a2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84l2.038 3.5h1.5a.5.5 0 0 1 0-1h5v-1a1.5 1.5 0 0 1 6.5 0h3a1.5 1.5 0 0 1 11 1.5zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5zm4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528zm8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0v5a.5.5 0 0 0-.5-.5z" />
                                                            </svg> <span class="text-danger"> eliminar</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
