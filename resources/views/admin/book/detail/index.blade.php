@extends('layouts.merge.dashboard')

@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Detalhe do Livro </h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe do Livro</li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.book.list.index') }}">Lista de Livros</a></li>
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
                        Livros Cadastrados
                    </div>
                    <div claclsss="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Titulo Livro</th>
                                    <th>Autor</th>
                                    <th>Editora</th>
                                    <th>ISBN</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $books->title}}</td>
                                    <td>{{ $books->author }}</td>
                                    <td>{{ $books->publisher }}</td>
                                    <td>{{ $books->isbn }}</td>
                                    <td>{{ $books->quantity }}</td>
                                    <td>{{ $books->price }}</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
