@extends('layouts.merge.dashboard')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Cadastrar Venda</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Cadastrar Venda </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.sale.list.index') }}">Lista de Vendas</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Inicial</a></li>
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
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="float: left "></h4> Adicionar Nova Venda<a href="" style="float: right" class="btn btn-dark" data-toggle="modal" data-target="#addUser">
                                    <i class="fa fa-plus"></i>Adicionar Nova Venda</a>
                            </div>
                            <div class="card-body">

                                <table class="table table-bordered table-left">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Produto</th>
                                            <th class="text-center">Preço Unt.</th>
                                            <th class="text-center">Qtd</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-end">Ação</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control fk_books_id" name="fk_books_id[]" id="fk_books_id">
                                                    <option value=""></option>
                                                    @foreach ($books as $book)
                                                    <option value="{{$book->id}}" {{(isset($books->id) && in_array($book->id, $sales->books->pluck('id')->toarray())) ? 'selected' : '' }}>
                                                        {{ $book->title }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="number" class="form-control salePrice" name="salePrice[]" value='' readonly></td>
                                            <td> <input type="number" class="form-control quantity" name="quantity[]"  value='' required></td>
                                            <td> <input type="number" class="form-control total" readonly name="total[]"  value='' required></td>
                                            <td><button type="button" class="btn btn-primary" id="addBtn">+</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- Employer --}}
                                <div class="col-md-4">
                                    <label for="fk_users_id">Funcionário</label>
                                    <input type="text" class="form-control" name="name" id="name" value='{{ Auth::user()->name}}' readonly>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{--  <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Total</h4>
                        </div>

                        <div class="card-body">
                            <h4>.....</h4>

                        </div>


                    </div>
                </div>  --}}
            </div>
        </div>
        <style>
            h4 {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 20px;
                font-weight: bolder;
                text-transform: uppercase;
            }

        </style>

    </main>
    @endsection

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            

           /* $(".fk_books_id").on("change", function() {
                let id = $(this).val();
                $('.salePrice').empty();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    dataType: 'json'
                    , url: "/admin/book/getBookById/" + id
                    , type: "GET"
                    , success: function(data) {
                        $('.salePrice').val(data.salePrice);
                    }
                    , error: function(error) {
                        console.log(error);
                    }
                });
            });*/

            $("#addBtn").click(function(e) {
                e.preventDefault();
                $("tbody").prepend(`<tr>
                    <td>
                        <select class="form-control books" name="fk_books_id[]" >
                            <option value=""></option>
                            @foreach ($books as $book)
                            <option value="{{$book->id}}" {{(isset($books->id) && in_array($book->id, $sales->books->pluck('id')->toarray())) ? 'selected' : '' }}>
                                {{ $book->title }}
                            </option>
                            @endforeach
                        </select>
                    </td>
                    <td><input type="number" class="form-control salePrice" name="salePrice[]" id="salePrice" value='' readonly></td>
                    <td> <input type="number" class="form-control" name="quantity[]" id="quantity" value='' required></td>
                    <td> <input type="number" class="form-control total" readonly name="total[]" id="total" value='' required></td>
                    <td><button type="button" class="btn btn-danger" id="removeBtn" >-</button></td>
                </tr>`);

            });

            $(document).on('click', '#removeBtn', function(e) {
                e.preventDefault();
                let row = $(this).parent().parent();
                $(row).remove();
            });

        });

      /*  $("#addForm").submit(function(e) {
            e.preventDefault();
            $("#primBtn").val('Criando...');

            $.ajax({
                dataType: 'json'
                , url: "/admin/sale/create"
                , type: "GET"
                , success: function(response) {
                    console.log(response)
                }
                , error: function(error) {
                    console.log(error);
                }
            });

        });
*/

   /* function Total(){
    Var totalAmount = 0;
    $('.total').each(function(i,e){
        var amount = $(this).val() - 0;
        totalAmount += aumount;
    });

     $('.total').html(totalAmount);
    }
*/

    </script>







