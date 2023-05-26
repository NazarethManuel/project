<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        return view('admin.home.index')->with('userCount', $userCount);
    }
}
