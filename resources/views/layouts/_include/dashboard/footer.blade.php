                <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                                <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                                        <div>
                                                <a href="#">Privacy Policy</a>
                                                &middot;
                                                <a href="#">Terms &amp; Conditions</a>
                                        </div>
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

@elseif(session('erro_students'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Já esta cadastrado nesta turma e curso!',
        showConfirmButton: true
    })
</script>

@elseif(session('romm_occupied'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Esta sala estará ocupada neste horário!',
        showConfirmButton: true
    })
</script>

@elseif(session('room_Satatus'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Existe uma sala com este nome!',
        showConfirmButton: true
    })
</script>


@elseif(session('existing_candidate'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Já existe um estudante com este Número de Identificação',
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
