<div>
    <form action="{{ route('admin.sale.viewPdf.index', $sales->id}}" method="post">
        @csrf
          <div class="col-md-12 mt-4 text-end">
            <button class="btn btn-success shadow"><i class="fas fa-eye"></i> Ver Fatura</button>
        </div>
    </form>
</div>
