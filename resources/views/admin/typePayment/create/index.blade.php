@extends('layouts.merge.dashboard')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Adicionar Novo tipo de Pagamento</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Adicionar Novo </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.typePayment.list.index') }}">Lista de Tipos de Pagamentos</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Principal</a></li>
                </ol>
            </div>
            <hr>

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
                        <form action="{{ route('admin.typePayment.store') }}" method="post">
                            @csrf
                            @include('form._formTypePayment.index')
                            <div class="col-md-12 mt-4 text-end">
                                <button class="btn btn-primary shadow"><i class="fas fa-plus"></i>Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>





    @endsection
