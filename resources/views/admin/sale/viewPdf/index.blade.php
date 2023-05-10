<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap">  --}}

    <title>Document</title>
    <style>
        body {
            font-family: 'Maven Pro', sans-serif;
            background-color: rgba(3, 3, 3, 0.993)
        }

        hr {
            color: #0000004f;
            margin-top: 5px;
            margin-bottom: 5px
        }

        .add td {
            color: #807c7c;
            text-transform: uppercase;
            font-size: 12px
        }

        .content {
            font-size: 14px
        }

    </style>
</head>
<body>
    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <br>
                    <div class="d-flex flex-row p-2"> <img src="/books/assets/img/book.png" width="48">

                        <div class="d-flex flex-column"> <span class="font-weight-bold">LuziAlf Lda </span> <small>NIF:009456664</small> </div>
                    </div>
                    <hr>
                    <div class="table-responsive p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td> Livraria LuziAlf Lda </td>
                                    <td>Fatura do Cliente</td>
                                </tr>
                                <tr class="content">
                                    <td class="font-weight-bold">Endereço:<br>Ingombota, Luanda <br>Angola</td>
                                    <td class="font-weight-bold">Nome do(a) Cliente: <br>  {{ $sales->costumer->name }} <br> Fatura nº{{ $sales->id}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Nome do Livro</td>
                                    <td>ISBN</td>
                                    <td>Editora</td>
                                    <td>Preço Unitário(AKZ)</td>
                                    <td class="text-center">Quantidade</td>
                                </tr>
                                <tr class="content">
                                    <td>{{ $sales->book->title }}</td>
                                    <td>{{ $sales->book->isbn }}</td>
                                    <td>{{ $sales->book->publisher }}</td>
                                    <td class="text-center">{{ $sales->book->salePrice }}</td>
                                    <td class="text-center">{{ $sales->quantity }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td></td>
                                    <td>Funcionário(a)</td>
                                    <td>Tipo de Pagamento</td>
                                    <td class="text-center">Total Pago(AKZ)</td>
                                </tr>
                                <tr class="content">
                                    <td></td>
                                    <td>{{ $sales->employer->name }}</td>
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
                                    <td>Coordenadas bancárias LuziAlf</td>
                                </tr>
                                <tr class="content">
                                    <td> Nome do Banco : Standard BANK <br> Nome do beneficiário : LuziAlf <br> Número de conta : 5454542WQR <br> IBAN: AO06 5454542WQR <br></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
