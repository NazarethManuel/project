<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Costumer;
use App\Models\Sale;
use App\Models\Supplier;
use App\Models\TypePayment;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $response['users'] = User::count();
        $response['customers'] = Costumer::count();
        $response['books'] = Book::count();
        $response['sales'] = Sale::count();
        $response['suppliers'] = Supplier::count();
        $response['TypePayments'] = TypePayment::count();
        return view('admin.home.index', $response);
    }
}
