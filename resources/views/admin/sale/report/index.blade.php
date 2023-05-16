<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>LuziAlf Fatura</title>
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
            margin-top: 5px;
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

                    <div class="d-flex flex-column font-weight-bold"> <span class="font-weight-bold">LuziAlf Lda </span><small><br> NIF: 009456664</small> </div>
                    <div class="d-flex flex-column font-weight-bold"> <span class="font-weight-bold">Ingombota </span><small><br>Luanda, Angola</small> </div>
                </div>

                <hr>

  <div class="products p-2">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                <tr class="add">
                    <td></td>
                    <td class="font-weight-bold">Id</td>
                    <td class="font-weight-bold">Nome do cliente</td>
                    <td class="font-weight-bold">Nome do Livro</td>
                    <td class="font-weight-bold">Preço Unt(AKZ)</td>
                    <td class="font-weight-bold">Qtd</td>
                    <td class="font-weight-bold">Total</td>
                    <td class="font-weight-bold">Funcionário</td>

                </tr>

                @foreach ($sales as $sale)

                <tr class="content">
                    td></td>
                    <td> {{ $sale->id}} </td>
                    <td>{{$sale->costumer->name }}</td>
                    <td>{{ $sale->book->title }}</td>
                    <td>{{ $sale->book->salePrice }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->total }}</td>
                    <td>{{ $sale->employer->name }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div>
</div>




        <script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" /> <
            link href = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" / >

        </script>
</body>
</html>
