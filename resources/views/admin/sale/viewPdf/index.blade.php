@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card" style="width: 18rem;">
                <img src="books/assets/img/book.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Livraria LuziAlf</h4>
                    <h4 class="card-text">NIF:00000075</h4>
                    <h4 class="card-text">Luanda, Ingombota</h4>
                    <p class="card-text">Os melhores livros ao seu dispor</p>
                </div>

            </div>
        </div>
        
        <hr>

</div>

</main>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatura</title>
    <style>
        h2 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 50px;
        }

        body {
            background: #f2f2f2;
        }

        .section {
            margin-top: 30px;
            padding: 50px;
            background: #fff;
        }

    </style>
</head>

<body>

<div class="card" style="width: 18rem;">
  <img src="books/assets/img/book.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>


    <div>
        <div style="width: 75%; margin:0 auto">
            <div style="width: 10%; float:left">
                <img src="#" alt="">

            </div>

            <div style="width: 50%; float:left">
                <h2>Fatura do Cliente</h2>
            </div>
        </div>

        <div>
            <form action="{{ route('admin.sale.exportPdf')}}" method="post" target="_blank">
                @csrf
                <div class="col-md-12 mt-4 text-end">
                    <button type="submit" class="btn btn-success shadow" onclick="window.print()"><i class="fas fa-download"></i> Download</button>
                </div>
            </form> 
        </div>
        <br>

        <div class="row">
            <br>
            <div class="col-md-6">
                <p>Nome do cliente: {{ $sales->costumer->name }} </p>
            </div>

            <div class="col-md-6">
                <p>Título do Livro: {{ $sales->book->title }} </p>
            </div>

            <div class="col-md-6">
                <p>ISBN: {{ $sales->book->isbn }}</p>
            </div>

            <div class="col-md-6">
                <p>Editora: <td>{{ $sales->book->publisher }} </p>
            </div>

            <div class="col-md-6">
                <p>Preço Unitário(AKZ): {{ $sales->book->salePrice  }} </p>
            </div>
            <div class="col-md-6">
                <p>Quantidade: {{ $sales->quantity  }} </p>
            </div>
            <div class="col-md-6">
                <p>Total (AKZ): {{ $sales->total}} </p>
            </div>
            <div class="col-md-6">
                <p>Tipo de Pagamento: {{ $sales->typePayment->type }} </p>
            </div>
            <divclass="col-md-6">
                <p>Funcionário(a): {{ $sales->employer->name}} </p>
        </div>
    </div>

</body>
</html>

