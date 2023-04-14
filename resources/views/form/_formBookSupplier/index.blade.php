<div class="row">

    <div class="col-md-6">
        <label for="fk_books_id">Livro</label>
        <select class="form-control" name="fk_books_id" id="fk_books_id">
            @foreach ($books as $book)
            <option value="{{ $book->id}}"> {{ $book->title }} </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="fk_suppliers_id">Fornecedor</label>
        <select class="form-control" name="fk_suppliers_id" id="fk_suppliers_id">
            @foreach ($bookSupplier as $supplier)
            <option value="{{$supplier->id}}"> {{ $supplier->title }} </option>
            @endforeach
        </select>
    </div>

</div>
