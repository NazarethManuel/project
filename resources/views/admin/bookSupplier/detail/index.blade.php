@extends('layouts.merge.dashboard')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="container-fluid px-4 mt-5">
                <h1 class="mt-4 text-center">Detalhe</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">

                        <div class="col-md-12">
                            <label for="title">Título do Livro</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$bookSupplier->book->title}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="title">Nome do Fornecedor</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$bookSupplier->supplier->title}}" readonly>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
