<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Models\Book;
use App\Models\Costumer;
use App\Models\Sale;

use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {

        // $response['suppliers ']= Supplier::count();
        $book = Book::count();
        // $response ['costumers'] = Costumer::count();
        // $response ['sales'] = Sale::count();
        // $response ['users'] = User::count();
        // $user = User::where()->count();

        return view('admin.home.index', compact('book'));
    }
}
