                <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                                <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; BookStore {{ date('Y') }}</div>
                                        {{--  <div>
                                                <a href="#">Politicas e Privacidade</a>
                                                &middot;
                                                <a href="#">Termos &amp; Condições</a>
                                        </div>  --}}
                                </div>
                        </div>
                </footer>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/books/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="/books/assets/demo/chart-area-demo.js"></script>
<script src="/books/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="/books/js/datatables-simple-demo.js"></script>

        <!-- Incluindo as bibliotecas do DataTables -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"></script>

<script>
    $(document).ready(function() {
        $('#tableSimple').DataTable({

            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>


{{-- sweetalert Footer--}}
@if (session('create'))
<script>
    Swal.fire({
        icon: 'success',
        title: ' cadastrado com sucesso!',
        showConfirmButton: true
    })
</script>

@elseif(session('destroy'))
<script>
    Swal.fire({
        icon: 'info',
        title: ' eliminado com sucesso!',
        showConfirmButton: true
    })
</script>

@elseif(session('deleteBook'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Este item não pode ser eliminado, antes elimine as suas ligações!',
        showConfirmButton: true
    })
</script>


@elseif(session('edit'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Alterações foram salvas com sucesso!',
        showConfirmButton: true
    })
</script>
@elseif(session('create_image'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Imagens foram salvas com sucesso!',
        showConfirmButton: true
    })
</script>

@elseif(session('invalid_Date'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Data Inválida',
        showConfirmButton: true
    })
</script>

@elseif(session('existing_cadast'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Este cadastro já existe!',
        showConfirmButton: true
    })
</script>

@elseif(session('Status'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Não é um administrador',
        showConfirmButton: true
    })
</script>


@elseif(session('existing'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Por favor, faça login primeiro',
        showConfirmButton: true
    })
</script>

@elseif(session('NoAuth'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Não tem autorização para visualizar esta página!',
        showConfirmButton: false,
        timer: 2500
    })
</script>

@elseif(session('candidates_status'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Não foi encontrado Pagamento deste Estudante com o status pago !',
        showConfirmButton: false,
        timer: 4500
    })
</script>
@endif

<script>
function mens() {
    confirm('Tem certeza de que deseja excluir este arquivo');
}
</script>



<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script>
</script>
</html>
