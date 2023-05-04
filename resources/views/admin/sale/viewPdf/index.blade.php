<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatura</title>
    <style>
        table{
            width:100%;
            border-collapse: collapse;
            margin: 50px auto;
        }
        tr:nth-of-type(odd){
            background: #fff;
        }
        th{
            background: #1e6da1
        }
        td,
        th{
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 18 px;
        }
    </style>
</head>

<body>
    <div style="width: 95%; margin:0 auto">
        <div style="width: 10%; float:left; margin-rigth:20px">
            <img src="#" alt="">

        </div>

        <div style="width: 50%; float:left">
            <h3>Fatura do Cliente</h3>
        </div>
    </div>
    <table style="position:relative; top:50px">
        <thead>
            <th>Nome do Cliente</th>
            <th>ISBN</th>
            <th>Nome do Livro</th>
            <th>Preço Unitário</th>
            <th>Editora</th>
            <th>Total</th>
            <th>Quantidade</th>
            <th>Tipo de Pagamento</th>
            <th>Funcionário</th>


        </thead>


        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sales->costumers->name }}</td>
                <td>{{ $sales->books->title }}</td>
                <td>{{ $sales->books->isbn }}</td>
                <td>{{ $sales->books->publisher }}</td>
                <td>{{ $sales->books->salePrice }}</td>
                <td>{{ $sales->quantity }}</td>
                <td>{{ $sales->total }}</td>
                <td>{{ $sales->typePayments->type }}</td>
                <td>{{ $sales->employers->name }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>


</body>
</html>
