@extends('layouts.merge.dashboard')

@section('title', 'Fatura')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <div class="container-fluid px-4">
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h4 class="card-text">Livraria LuziAlf</h4>
                            <h4 class="card-text">NIF:00000075</h4>
                            <h4 class="card-text">Luanda, Ingombota</h4>
                            <p class="card-text">Os melhores livros ao seu dispor</p>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <div class="col-md-12 mt-4 text-end">
                    <button type="submit" class="btn btn-success shadow" onclick="window.print()"><i class="fas fa-download"></i> Download PDF</button>
                </div>
            </div>


            <hr>

            <div class="container-fluid px-4">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <div class="card mb-4">

                    <div class="card-body">
                        <table class="table">
                            <thead class="table-light">

                                <tr>
                                    <th>Nome do Cliente</th>
                                    <th>Nome do Livro</th>
                                    <th>ISBN</th>
                                    <th>Editora</th>
                                    <th>Preço Unitário(AKZ)</th>
                                    <th>Quantidade</th>
                                    <th>Tipo de Pagamento</th>
                                    <th>Funcionário(a)</th>
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
                                    <td>{{ $sales->employer->name }}</td>

                                </tr>
                            </tbody>
                        </table>

                        <h5>Total(AKZ): {{ $sales->total }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
