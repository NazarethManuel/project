<div class="row">
    <div class="col-md-6">
        <label for="title">Título do Livro</label>
        <input type="text" class="form-control" name="title" id="title"  value={{ isset($book->title)? $book->title : ''}} >

    </div>
    <div class="col-md-6">
        <label for="author">Autor</label>
        <input type="text" class="form-control" name="author" id="author"  value={{ isset($book->author)? $book->author : ''}}>

    </div>
    <div class="col-md-6">
        <label for="publisher">Editora</label>
        <input type="text" class="form-control" name="publisher" id="publisher"  value={{ isset($book->publisher)? $book->publisher : ''}}>

    </div>
    <div class="col-md-6">
        <label for="isbn">ISBN</label>
        <input type="number" class="form-control" name="isbn" id="title"  value={{ isset($book->isbn)? $book->isbn : ''}}>
    </div>
    <div class="col-md-6">
        <label for="startingAmount">Quantidade Inicial</label>
        <input type="number" class="form-control" name="startingAmount" id="startingAmount"  value={{ isset($book->startingAmount)? $book->startingAmount : ''}}>

    </div>
    <div class="col-md-6">
        <label for="purchasePrice">Preço de Compra</label>
        <input type="number" class="form-control" name="purchasePrice" id="purchasePrice"  value={{ isset($book->purchasePrice)? $book->purchasePrice : ''}}>

    </div>
    <div class="col-md-6">
        <label for="salePrice">Preço de Venda</label>
        <input type="number" class="form-control" name="salePrice" id="salePrice"  value={{ isset($book->salePrice)? $book->salePrice : ''}}>

    </div>

</div>

