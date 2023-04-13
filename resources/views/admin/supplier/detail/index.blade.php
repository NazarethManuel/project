@extends('layouts.merge.dashboard')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="container-fluid px-4 mt-5">
                <h1 class="mt-4 text-center">Detalhe dos Fornecedor</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">

                        <div class="col-md-12">
                            <label for="title">Nome de fornecedor</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$supplier->title}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="telephone">Nº Telefone</label>
                            <input type="text" class="form-control" name="telephone" id="telephone" value="{{$supplier->telephone}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="manager">Manager</label>
                            <input type="text" class="form-control" name="manager" id="manager" value="{{$supplier->manager}}" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="nif">NIF</label>
                            <input type="text" class="form-control" name="nif" id="nif" required value="{{$supplier->nif}}" readonly>

                        </div>
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" required value="{{$supplier->email}}" readonly>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
