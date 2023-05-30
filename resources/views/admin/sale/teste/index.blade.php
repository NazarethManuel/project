@extends('layouts.merge.dashboard')

@section('content')

<div id="layoutSidenav_content">
    <main>
     <div class="container-fluid mt-9">

            <div class="row my-5">
                <div class="col-lg-20 mx-auto">
                    <div class="card shadow mb-4">
                        <div class="header text-center">
                            <h3>Venda</h3>
                        </div>
                        <div class="card-body p-4">
                         <form action="#" method="post" id="formBook">
                            <div id="showBook">
                                <div class="row">

                                    <div class="col-md-4  mb-3">
                                        <select class="form-control" name="fk_books_id[]" id="books" >
                                            <option value=""></option>
                                            @foreach ($books as $book)
                                                <option value="{{$book->id}}" {{(isset($books->id) && in_array($book->id, $sales->books->pluck('id')->toarray())) ? 'selected' : '' }}>
                                                    {{ $book->title }}
                                                </option>
                                            @endforeach
                                    </div>
                                  <br>

                                    <div class="col-md-3 mb-5">
                                        <label for="isbn[]">ISBN</label>
                                        <input type="number" class="form-control" name="isbn[]" id="isbn" value='' readonly>
                                    </div>

                                    <div class="col-md-2 mb-5">
                                        <label for="publisher[]">Editora</label>
                                        <input type="text" class="form-control" name="publisher[]" id="publisher" value='' readonly>
                                    </div>

                                    <div class="col-md-2 mb-5">
                                        <label for="salePrice[]">Preço</label>
                                        <input type="number" class="form-control" name="salePrice[]" id="salePrice" value='' readonly>
                                    </div>

                                    <div class="col-md-2 mb-5">
                                        <label for="quantity[]" >Preço</label>
                                        <input type="number" class="form-control" name="quantity[]" id="quantity" value='' required>
                                    </div>

                                    <div class="col-md-4 mb-5">
                                       <button class="btn btn-success add_book_btn">Add Mais</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit"  id="add" value='Add' class="btn btn-primary w-25">
                            </div>
                         </form>
                        </div>
                    </div>
                </div>
            </div>

     </div>
    </main>


    @endsection
