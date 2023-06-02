@extends('layouts.merge.dashboard')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
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

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="showBook">
                            <form action="#" method="post" id='addForm'>
                                @csrf
                                <div class="row">
                                    <table id="datatablesSimple">
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
                                                    <select class="form-control" name="fk_books_id[]" id="books">
                                                        <option value=""></option>
                                                        @foreach ($books as $book)
                                                        <option value="{{$book->id}}" {{(isset($books->id) && in_array($book->id, $sales->books->pluck('id')->toarray())) ? 'selected' : '' }}>
                                                            {{ $book->title }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td><input type="number" class="form-control" name="salePrice[]" id="salePrice" value='' readonly></td>
                                                <td> <input type="number" class="form-control" name="quantity[]" id="quantity" value='' required></td>
                                                <td> <input type="number" class="form-control total" readonly name="total[]" id="total" value='' required></td>
                                                <td><button type="button" class="btn btn-primary" id="addBtn">+</button></td>
                                            </tr>
                                        </tbody>
                                    </table>



                                    {{-- Client --}}

                                    <div class="col-md-4">
                                        <label for="fk_costumers_id">Cliente</label>
                                        <select class="form-control" name="fk_costumers_id" id="fk_costumers_id">
                                            <option value=""></option>
                                            @foreach ($costumers as $costumer)
                                            <option value="{{$costumer->id}}" {{(isset($costumers->id)&& $sales->costumer->id == $costumers->id )? 'selected' : '' }}>{{ $costumer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <div class="col-md-6">
                                    <label for="fk_costumers_id">Cliente</label>
                                    <input type="text" class="form-control" name="costumer_name" id="costumer_name" value="{{ old('costumer_name') }}" />
                                    <input type="hidden" name="fk_costumers_id" id="fk_costumers_id" value="{{ old('fk_costumers_id') }}" />
                                    <input type="checkbox" name="create_new_costumer" id="create_new_costumer">
                                    <label for="create_new_costumer">Criar novo cliente</label>
                                </div> --}}

                                {{-- <div class="col-md-6">
                                    <label for="fk_costumers_id">Cliente</label>
                                    <input type="text" class="form-control" name="fk_costumers_id" id="fk_costumers_id" value="{{ old('fk_costumers_id') }}" />
                        </div> --}}

                        {{-- Employer --}}
                        <div class="col-md-4">
                            <label for="fk_users_id">Funcionário</label>
                            <input type="text" class="form-control" name="name" id="name" value='{{ Auth::user()->name}}' readonly>

                        </div>

                        {{-- Type Payment--}}

                        <div class="col-md-4">
                            <label for="fk_typePayments_id">Tipo de Pagamento</label>
                            <select class="form-control" name="fk_typePayments_id" id="fk_typePayments_id">
                                <option value=""></option>
                                @foreach ($typePayments as $typePayment)
                                <option value="{{$typePayment->id}}" {{(isset($typePayments->id)&& $sales->typePayment->id == $typePayments->id )? 'selected' : '' }}>{{ $typePayment->type }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4 text-end">
                        <button class="btn btn-primary shadow" id="primBtn"><i class="fas fa-plus"></i> Cadastrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $("#books").on("change click", function() {
            let id = $(this).val();
            $('#salePrice').empty();
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
                    $('#salePrice').val(data.salePrice);
                }
                , error: function(error) {
                    console.log(error);
                }
            });
        });

        $("#addBtn").click(function(e) {
            e.preventDefault();
            $("tbody").prepend(`<tr>
                    <td>
                        <select class="form-control" name="fk_books_id[]" id="books">
                            <option value=""></option>
                            @foreach ($books as $book)
                            <option value="{{$book->id}}" {{(isset($books->id) && in_array($book->id, $sales->books->pluck('id')->toarray())) ? 'selected' : '' }}>
                                {{ $book->title }}
                            </option>
                            @endforeach
                        </select>
                    </td>
                    <td><input type="number" class="form-control" name="salePrice[]" id="salePrice" value='' readonly></td>
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

    $("#addForm").submit(function(e){
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

    })



</script>






@endsection
