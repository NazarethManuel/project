@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Detalhe do Cliente</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe do Cliente </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.costumer.list.index') }}">
                        lista de Clientes</a></li>
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
                        Detalhe do Clientes
                    </div>
                    <div claclsss="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Nome do cliente</th>
                                    <th>Cotacto</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{ $costumer->name}}</td>
                                    <td>{{ $costumer->telephone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
