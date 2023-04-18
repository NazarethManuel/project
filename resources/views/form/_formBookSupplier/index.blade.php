<div class="row">

    <div class="col-md-6">
        <label for="fk_books_id">Livro</label>
        <select class="form-control" name="fk_books_id" id="fk_books_id">
            <option value="" ></></option>
            @foreach ($books as $book)
            <option value="{{ $book->id}}" {{(isset($books->id)&& $bookSuppliers->books->id == $books->id )? 'selected' : '' }}>{{ $book->title }} </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="fk_suppliers_id">Fornecedor</label>
        <select class="form-control" name="fk_suppliers_id" id="fk_suppliers_id">
             <option value="" ></option>
            @foreach ($suppliers as $supplier)
            <option value="{{$supplier->id}}" {{(isset($suppliers->id)&& $bookSuppliers->suppliers->id == $suppliers->id )? 'selected' : '' }}>{{ $supplier->name }} </option>
            @endforeach
        </select>
    </div>

</div>

