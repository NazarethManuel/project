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
        <label for="quantity">Quantidade</label>
        <input type="number" class="form-control" name="quantity" id="quantity"  value={{ isset($book->quantity)? $book->quantity : ''}}>

    </div>
    <div class="col-md-6">
        <label for="price">Preço unitário</label>
        <input type="number" class="form-control" name="price" id="price"  value={{ isset($book->price)? $book->price : ''}}>

    </div>

</div>

