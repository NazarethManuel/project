<div class="row">

    {{-- Livro --}}

    <div class="col-md-6">
        <label for="fk_books_id">Livro</label>
        <select class="form-control" name="fk_books_id" id="books" >
            <option value=""></option>
            @foreach ($books as $book)
            <option value="{{$book->id}}" {{(isset($books->id)&& $sales->book->id == $books->id )? 'selected' : '' }}>{{ $book->title }} </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="isbn">ISBN</label>
        <input type="number" class="form-control " name="isbn" id="isbn" value='' readonly>
    </div>
    <div class="col-md-6">
        <label for="publisher">Editora</label>
        <input type="text" class="form-control " name="publisher" id="publisher" value='' readonly>
    </div>
    <div class="col-md-6">
        <label for="salePrice">Preço Unitário(AKZ)</label>
        <input type="number" class="form-control" name="salePrice" id="salePrice" value='' readonly>
    </div>

    <div class="col-md-6">
        <label for="quantity">Quantidade</label>
        <input type="number" class="form-control quantity" name="quantity" id="quantity" value={{ isset($sales->quantity)? $sales->quantity : ''}}>
    </div>

    <div class="col-md-6">
        <label for="total">Total (AKZ)</label>
        <input type="number" class="form-control" readonly name="total" id="total" value={{ isset($sales->total)? $sales->total : ''}} >
    </div>



    {{-- Client --}}

     <div class="col-md-6">
        <label for="fk_costumers_id">Cliente</label>
        <select class="form-control" name="fk_costumers_id" id="fk_costumers_id">
            <option value=""></option>
            @foreach ($costumers as $costumer)
            <option value="{{$costumer->id}}" {{(isset($costumers->id)&& $sales->costumer->id == $costumers->id )? 'selected' : '' }} >{{ $costumer->name }}</option>
            @endforeach
        </select>
    </div>

    {{--  <div class="col-md-6">
        <label for="fk_costumers_id">Cliente</label>
        <input type="text" class="form-control" name="costumer_name" id="costumer_name" value="{{ old('costumer_name') }}" />
        <input type="hidden" name="fk_costumers_id" id="fk_costumers_id" value="{{ old('fk_costumers_id') }}" />
        <input type="checkbox" name="create_new_costumer" id="create_new_costumer">
        <label for="create_new_costumer">Criar novo cliente</label>
    </div>  --}}

    {{--  <div class="col-md-6">
        <label for="fk_costumers_id">Cliente</label>
        <input type="text" class="form-control" name="fk_costumers_id" id="fk_costumers_id" value="{{ old('fk_costumers_id') }}" />
    </div>  --}}

    {{-- Employer --}}
    <div class="col-md-6">
        <label for="fk_users_id">Funcionário</label>
        <input type="text" class="form-control" name="name" id="name" value='{{ Auth::user()->name}}' readonly>

    </div>

    {{-- Type Payment--}}

    <div class="col-md-6">
        <label for="fk_typePayments_id">Tipo de Pagamento</label>
        <select class="form-control" name="fk_typePayments_id" id="fk_typePayments_id">
            <option value=""></option>
            @foreach ($typePayments as $typePayment)
            <option value="{{$typePayment->id}}" {{(isset($typePayments->id)&& $sales->typePayment->id == $typePayments->id )? 'selected' : '' }}>{{ $typePayment->type }} </option>
            @endforeach
        </select>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $("#books").on("change click", function() {
            let id = $(this).val();
            $('#isbn').empty();
            $('#publisher').empty();
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
                    $('#isbn').val(data.isbn);
                    $('#publisher').val(data.publisher);
                    $('#salePrice').val(data.salePrice);
                }
                , error: function(error) {
                    console.log(error);
                }
            });
        });
    });

    $(function() {
        $('.quantity, .sale-price').change(function() {
            var quantity = parseInt($('#quantity').val());
            var sale_price = parseFloat($('#salePrice').val());
            var total = quantity * sale_price;

            $('#total').val(total);
        });
    });

</script>
