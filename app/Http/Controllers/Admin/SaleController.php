<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Costumer;
use App\Models\Employer;
use App\Models\Sale;
use App\Models\TypePayment;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class SaleController extends Controller
{

    public function index()
    {
        $sales = Sale::all();
        return view('admin.sale.list.index', compact('sales'));
    }


    public function create()
    {
        $response['books'] = Book::get();
        $response['costumers'] = Costumer::get();
        $response['employers'] = Employer::get();
        $response['typePayments'] = TypePayment::get();
        $response['sales'] = Sale::get();
        return view('admin.sale.create.index', $response);
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'quantity' => 'required',
            'total' => 'required',
            'fk_books_id' => 'required',
            'fk_costumers_id' => 'required',
            'fk_employers_id' => 'required',
            'fk_typePayments_id' => 'required'

        ], [
            'quantity.required' => 'Adicione a quantidade',
            'total.required' => 'Qual é o total',
            'fk_books_id.required' => 'Selecione o livro',
            'fk_costumers_id.required' => 'adicione o Cliente',
            'fk_employers_id.required' => 'Selecione o funcionário',
            'fk_typePayments_id.required' => 'Selecione o Tipo de Pagamento'
        ]);

        Sale::create($data);
        return redirect()->route('admin.sale.create.index')->with('create', '1');
    }


    public function show($id)
    {
        $response['books'] = Book::get();
        $response['costumers'] = Costumer::get();
        $response['employers'] = Employer::get();
        $response['typePayments'] = TypePayment::get();
        $response['sales'] = Sale::find($id);
        return view('admin.sale.detail.index', $response);
    }


    public function edit($id)
    {
        $response['books'] = Book::get();
        $response['costumers'] = Costumer::get();
        $response['employers'] = Employer::get();
        $response['typePayments'] = TypePayment::get();
        $response['sales'] = Sale::find($id);
        return view('admin.sale.edit.index', $response);
    }


    public function update(Request $request, $id)
    {

        $data = $this->validate($request, [
            'quantity' => 'required',
            'total' => 'required',
            'fk_books_id' => 'required',
            'fk_costumers_id' => 'required',
            'fk_employers_id' => 'required',
            'fk_typePayments_id' => 'required'

        ], [
            'quantity.required' => 'Adicione a quantidade',
            'fk_books_id.required' => 'Selecione o livro',
            'fk_costumers_id.required' => 'adicione o Cliente',
            'fk_employers_id.required' => 'Selecione o funcionário',
            'fk_typePayments_id.required' => 'Selecione o Tipo de Pagamento'
        ]);

        Sale::find($id)->update($data);
        return redirect()->route('admin.sale.list.index', $data)->with('update', '1');
    }


    public function destroy($id)
    {
        Sale::find($id)->delete();
        return redirect()->route('admin.sale.list.index')->with('destroy', '1');
    }

    public function viewPdf($id)
    {
        $response['sales'] = Sale::find($id);
        $pdf = Pdf::loadView('admin.sale.viewPdf.index', $response)
            ->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
    public function exportPdf($id)
    {

        $response['sales'] = Sale::find($id);
        $pdf = Pdf::loadView('admin.sale.exportPdf.index', $response)
            ->setPaper('a4', 'portrait');
        return $pdf->download('index.pdf');
    }
    public function search(Request $request)
    {
        $Init = $request->input('dateInit');
        $End = $request->input('dateEnd');
        $sales = Sale::whereDate('created_at', '>=', $Init)->whereDate('created_at', '<=', $End)->get();
        if ($Init > $End) {
            return redirect()->route('admin.sale.list.index', compact('sales'))->with('invalid_Date', '1');
        }

         $pdf = Pdf::loadView('admin.sale.report.index', compact('Init', 'End', 'sales'))
             ->setPaper('a4', 'portrait')
             ->save(public_path('report' . Str::random("10") . 'pdf'));
        // return view('admin.sale.list.index', compact('sales'));

        return $pdf->download('index.pdf');
    }
}
