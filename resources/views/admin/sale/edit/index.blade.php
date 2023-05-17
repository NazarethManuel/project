@extends('layouts.merge.dashboard')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5">
                <br>
                <h3 class="mt-4">Editar Vendas</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Editar Vendas </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.sale.list.index') }}">
                        lista de Vendas</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Principal</a></li>
                </ol>
            </div>

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
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('admin.sale.update',$sales->id) }}" method="POST">
                            @csrf

                            @include('form._formSale.index')

                            <div class="col-md-12 mt-3 text-end">
                                <button class="btn btn-primary shadow" type="submit">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection
