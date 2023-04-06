@extends('layouts.default')

@section('title', 'Formulario')

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Editar  Livros</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Livros</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Preencha o formulário
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.books.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title">Título do Livro</label>
                                    <input type="text" class="form-control" name="title" value="{{ $books->title }}" id="title" required>
                                  
                                </div>
                                <div class="col-md-6">
                                    <label for="author">Autor</label>
                                    <input type="text" class="form-control" name="author" value="{{ $books->author }}" id="author" required>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="publisher">Editora</label>
                                    <input type="text" class="form-control" name="publisher"  value="{{ $books->publisher }}" id="publisher" required>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="isbn">ISBN</label>
                                    <input type="number" class="form-control" name="isbn" value="{{ $books->isbn }}" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="quantity">Quantidade</label>
                                    <input type="number" class="form-control" name="quantity" value="{{ $books->quantity }}" id="quantity" required>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="price">Preço</label>
                                    <input type="number" class="form-control" name="price" value="{{ $books->price }}" id="price" required>
                                   
                                </div>

                            </div>
                            <br>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </main>

@endsection
