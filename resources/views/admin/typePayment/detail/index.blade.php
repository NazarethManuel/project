@extends('layouts.merge.dashboard')

@section('title', 'Listar')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-md-11 ml-5 ">
                <br>
                <h3 class="mt-4">Detalhe do Tipo de Pagamento</h3>
                <br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detalhe do Tipo de Pagamento </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.typePayment.list.index') }}">
                        lista de Tipos de Pagamentos</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Painel Principal</a></li>
                </ol>
            </div>
            <hr>

            <div class="container-fluid px-4">
                
                <div claclsss="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tipo de Pagamento</th>                  

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>{{ $typePayment->type }}</td>
                                  </tr>


                            </tbody>
                        </table>
                    </div>  

            </div>
        </div>
    </main>
    @endsection
