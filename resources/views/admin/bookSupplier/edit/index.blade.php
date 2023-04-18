@extends('layouts.merge.dashboard')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Painel Principal</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Livros e Fornecedores</li>
            </ol>

            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

            <div class="container-fluid px-4">
                <h1 class="mt-4">Editar </h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('admin.bookSupplier.update',$bookSuppliers->id)}}" method="POST">
                          @csrf



                            @include('form._formBookSupplier.index')

                            <div class="col-md-12 mt-3 text-end">
                                <button class="btn btn-primary shadow" type="submit">{{ isset($bookSuppliers) ? 'Editar' : 'Cadastrar' }}</</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
