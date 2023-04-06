<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


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

Route::get('/books/home', [App\Http\Controllers\BookController::class, 'index'])->name('books.home');
Route::get('/admin/books/create', [App\Http\Controllers\BookController::class, 'create'])->name('admin.books.create');
Route::post('/admin/books/store', [App\Http\Controllers\BookController::class, 'store'])->name('admin.books.store');
Route::get('/admin/books/list', [App\Http\Controllers\BookController::class, 'list'])->name('admin.books.list');

Route::get('/admin/books/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('admin.books.edit');
Route::post('/admin/books/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('admin.books.update');
Route::get('/admin/books/delete/{id}', [App\Http\Controllers\BookController::class, 'delete'])->name('admin.books.delete');

Route::get('/admin/books/login', [App\Http\Controllers\HomeController::class, 'login'])->name('passwords.login');


Route::get('/form/formBooks', [App\Http\Controllers\BookController::class, 'formBook'])->name('form.FormBooks');

Route::get('/form/supliers', [App\Http\Controllers\BookController::class, 'formSupliers'])->name('form.formSupliers');

Route::get('/form/user', [App\Http\Controllers\BookController::class, 'formUser'])->name('form.formUser');
