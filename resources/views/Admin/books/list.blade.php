@extends('layouts.default')

@section('title', 'Formulario')

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Cadastrar Livros</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Livros</li>
                </ol>

                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Livros Cadastrados
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Titulo Livro</th>
                                            <th>Autor</th>
                                            <th>Editora</th>
                                            <th>ISBN</th>
                                            <th>QTD</th>
                                            <th>Preço</th>
                                            <th>Acção</th>
                                            <th>Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $Book)
                                            <tr>
                                                <td>{{ $Book->title }}</td>
                                                <td>{{ $Book->author }}</td>
                                                <td>{{ $Book->publisher }}</td>
                                                <td>{{ $Book->isbn }}</td>
                                                <td>{{ $Book->quantity }}</td>
                                                <td>{{ $Book->price }}</td>
                                                <td>
                                                    <a href="{{ route('admin.books.update', $Book->id) }}" class="btn btn-primary" method="POST">Editar</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-danger">Excluir</a>
                                                </td>
                                            </tr>
                                        @endforeach
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    @endsection
