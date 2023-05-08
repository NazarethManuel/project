@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Lista de Vendas do Ano de {{ date('Y') }}</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Lista de Vendas </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.sale.create.index') }}">Nova Venda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Principal</a></li>
                </ol>
            </div>
            <hr>

            <div class="container-fluid px-4">

                {{--<div class="row">

                    <form action="{{ route('admin.sale.search') }}">
                        @csrf

                        <div class="col-md-3">
                            <label for="name">De:</label>
                            <input type="date" class="form-control form-control-sm" name="dateInit" required>
                        </div>

                        <div class="col-md-3">
                            <label for="name">Á:</label>
                            <input type="date" class="form-control form-control-sm" name="dateEnd">
                        </div>

                        <div class="col-md-3">
                            <label for="name"></label>
                            <button type="button" class="btn btn-success btn-sm"><a href="{{ route('admin.sale.search') }}">Pesquisar</a></button>
                        </div>
                    </form>

                </div>--}}


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
                                    <th>Preço Unitário</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                    <th>Funcionário</th>
                                    <th>Acção</th>

                                </tr>


                            </thead>

                            <tbody>
                                @foreach ($sales as $sale)
                                <tr>
                                    <td>{{ $sale->costumer->name }}</td>
                                    <td>{{ $sale->book->title }}</td>
                                    <td>{{ $sale->book->salePrice }}</td>
                                    <td>{{ $sale->quantity }}</td>
                                    <td>{{ $sale->total }}</td>
                                    <td>{{ $sale->employer->name }}</td>
                                    <td>
                                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas  fa-fw"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                                    <li>
                                                        <a href="{{ route('admin.sale.viewPdf', $sale->id)}}" class="dropdown-item" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                            </svg><span class="text-second"> Fatura</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
