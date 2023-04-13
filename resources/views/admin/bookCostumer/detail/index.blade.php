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
                            <label for="title">Nome do Cliente</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$costumer->title}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="telephone">Editora</label>
                            <input type="text" class="form-control" name="telephone" id="telephone" value="{{$costumer->telephone}}" readonly>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
