@extends('layouts.merge.dashboard')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="container-fluid px-4 mt-5">
                <h1 class="mt-4 text-center">Detalhe do Livro</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">

                        <div class="col-md-12">
                            <label for="author">Autor</label>
                            <input type="text" class="form-control" name="author" id="author" value="{{$books->author}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="publisher">Editora</label>
                            <input type="text" class="form-control" name="publisher" id="publisher" value="{{$books->publisher}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="isbn">ISBN</label>
                            <input type="number" class="form-control" name="isbn" id="title" value="{{$books->isbn}}" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="quantity">Quantidade</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" required value="{{$books->quantity}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="price">Preço</label>
                            <input type="number" class="form-control" name="price" id="price" required value="{{$books->price}}" readonly>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
