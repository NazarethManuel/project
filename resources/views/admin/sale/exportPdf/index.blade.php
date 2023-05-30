<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>BookStore Fatura</title>
    <style>
        body {
            font-family: 'Maven Pro', sans-serif;
            background-color: #ffffff
        }

        hr {
            color: #0a0a0a4f;
            margin-top: 5px;
            margin-bottom: 5px
        }

        .add td {
            color: #080000;
            text-transform: uppercase;
            font-size: 14px
        }

        .content {
            font-size: 12px margin-top: 5px;
            margin-bottom: 5px
        }

    </style>
</head>
<body>

    <div class="container mt-5 mb-3">

        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="d-flex flex-row p-2"> <img src="{{ public_path("/books/assets/img/book.png") }}" width="48">

                    <div class="d-flex flex-column font-weight-bold"> <span class="font-weight-bold">BookStore Lda </span><small><br> NIF: 009456664</small> </div>
                    <div class="d-flex flex-column font-weight-bold"> <span class="font-weight-bold">Ingombota </span><small><br>Luanda, Angola</small> </div>
                </div>

                <hr>
                <div class="table-responsive p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td class="font-weight-bold">Fatura do Cliente</td>~
                                <td class="font-weight-bold">Nome do Cliente</td>
                            </tr>
                            <tr class="content">

                                <td > Fatura nº{{ $sales->id}} <br> <br> <br></td>
                                <td >{{$sales->costumer->name }}<br></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="products p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                td></td>
                                <td class="font-weight-bold">Nome do Livro</td>
                                <td class="font-weight-bold">ISBN</td>
                                <td class="font-weight-bold">Editora</td>
                            </tr>
                            <tr class="content">
                                td></td>
                                <td>{{ $sales->book->title }}</td>
                                <td>{{ $sales->book->isbn }}</td>
                                <td>{{ $sales->book->publisher }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="products p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td class="font-weight-bold"></td>
                                <td class="font-weight-bold">Preço Unt(AKZ)</td>
                                <td class="font-weight-bold">Qtd</td>
                            </tr>
                            <tr class="content">
                                <td></td>
                                <td>{{ $sales->book->salePrice }}</td>
                                <td>{{ $sales->quantity }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="products p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td class="font-weight-bold"></td>
                                <td class="font-weight-bold">Tipo de Pagamento</td>
                                <td class="font-weight-bold text-center">Total Pago(AKZ)</td>
                            </tr>
                            <tr class="content">
                                <td></td>
                                <td>{{ $sales->typePayment->type }}</td>
                                <td class="text-center">{{ $sales->total }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="address p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td class="font-weight-bold">Funcionário(A)</td>
                            </tr>
                            <tr class="content">
                                <td>{{ Auth::user()->name}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="address p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td class="font-weight-bold">Coordenadas bancárias BookStore</td>
                            </tr>
                            <tr class="content">
                                <td> Nome do Banco : Standard BANK <br> Nome do beneficiário : BookStore <br> Número de conta : 5454542WQR <br> IBAN: AO06 5454542WQR <br></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>


     <script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
     </script>
</body>
</html>
