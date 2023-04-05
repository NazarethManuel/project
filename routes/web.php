<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books/home', [App\Http\Controllers\BooksController::class, 'index'])->name('books.home');
Route::get('/form/books', [App\Http\Controllers\BooksController::class, 'form'])->name('form.books');
Route::get('/form/supliers', [App\Http\Controllers\BooksController::class, 'formSupliers'])->name('form.supliers');
Route::get('/form/user', [App\Http\Controllers\BooksController::class, 'formUser'])->name('form.user');
