@extends('layouts.merge.dashboard')

@section('title', 'Detalhe')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Lista de Vendas</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe ds Venda </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.sale.list.index') }}">Lista de Vendas</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Inicial</a></li>
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
                        Lista de Vendas
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Nome do Cliente</th>
                                    <th>Nome do Livro</th>
                                    <th>ISBN</th>
                                    <th>Editora</th>
                                    <th>Preço Unitário</th>
                                    <th>Quantidade</th>
                                    <th>Tipo de Pagamento</th>
                                    <th>Funcionário</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{ $sales->costumer->name }}</td>
                                    <td>{{ $sales->book->title }}</td>
                                    <td>{{ $sales->book->isbn }}</td>
                                    <td>{{ $sales->book->publisher }}</td>
                                    <td>{{ $sales->book->salePrice }}</td>
                                    <td>{{ $sales->quantity }}</td>
                                    <td>{{ $sales->typePayment->type }}</td>
                                    <td>{{ Auth::user()->name}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
