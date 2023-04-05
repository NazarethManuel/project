@extends('layouts.default')

@section('title', 'Formulario')

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Cadastar  Funcionário</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Usuários</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Preencha o formulário
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title">Nome completo</label>
                                    <input type="text" class="form-control" name="title" id="title" required>
                                  
                                </div>
                                <div class="col-md-6">
                                    <label for="author">função</label>
                                    <input type="text" class="form-control" name="author" id="author" required>
                                    
                                </div>

                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </main>

@endsection
