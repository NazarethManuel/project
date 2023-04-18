<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\SupplierController;


Route::middleware('auth')->group(function () {

Route::get('admin/home/index', ['as'=>'admin.home.index','uses'=>'Admin\HomeController@index']);

//BOOKS
Route::get('admin/book/list/index', ['as'=>'admin.book.list.index','uses'=>'Admin\BookController@index']);
Route::get('admin/book/create/index', ['as'=>'admin.book.create.index','uses'=>'Admin\BookController@create']);
Route::post('admin/book/create/store', ['as'=>'admin.book.create.store','uses'=>'Admin\BookController@store']);
Route::get('admin/book/show/{id}', ['as'=>'admin.book.show','uses'=>'Admin\BookController@show']);
Route::get('admin/book/edit/{id}', ['as'=>'admin.book.edit.index','uses'=>'Admin\BookController@edit']);
Route::post('admin/book/update/{id}', ['as'=>'admin.book.update','uses'=>'Admin\BookController@update']);
Route::get('admin/book/destroy/{id}', ['as'=>'admin.book.destroy','uses'=>'Admin\BookController@destroy']);
//END BOOK

//SUPPLIER
Route::get('admin/supplier/list/index', ['as'=>'admin.supplier.list.index','uses'=>'Admin\SupplierController@index']);
Route::get('admin/supplier/create/index', ['as'=>'admin.supplier.create.index','uses'=>'Admin\SupplierController@create']);
Route::post('admin/supplier/create/store', ['as'=>'admin.supplier.store','uses'=>'Admin\SupplierController@store']);
Route::get('admin/supplier/show/{id}', ['as'=>'admin.supplier.show','uses'=>'Admin\SupplierController@show']);
Route::get('admin/supplier/edit/{id}', ['as'=>'admin.supplier.edit','uses'=>'Admin\SupplierController@edit']);
Route::post('admin/supplier/update/{id}', ['as'=>'admin.supplier.update','uses'=>'Admin\SupplierController@update']);
Route::get('admin/supplier/destroy/{id}', ['as'=>'admin.supplier.destroy','uses'=>'Admin\SupplierController@destroy']);
//END SUPPLIER

//COSTUMER
Route::get('admin/costumer/list/index', ['as'=>'admin.costumer.list.index','uses'=>'Admin\CostumerController@index']);
Route::get('admin/costumer/create/index', ['as'=>'admin.costumer.create.index','uses'=>'Admin\CostumerController@create']);
Route::post('admin/costumer/create/store', ['as'=>'admin.costumer.store','uses'=>'Admin\CostumerController@store']);
Route::get('admin/costumer/show/{id}', ['as'=>'admin.costumer.show','uses'=>'Admin\CostumerController@show']);
Route::get('admin/costumer/create/edit/{id}', ['as'=>'admin.costumer.edit.index','uses'=>'Admin\CostumerController@edit']);
Route::post('admin/costumer/update/{id}', ['as'=>'admin.costumer.update','uses'=>'Admin\CostumerController@update']);
Route::get('admin/costumer/destroy/{id}', ['as'=>'admin.costumer.destroy','uses'=>'Admin\CostumerController@destroy']);
//END COSTUMER

//BOOK_SUPPLIER
Route::get('admin/bookSupplier/list/index', ['as'=>'admin.bookSupplier.list.index','uses'=>'Admin\BookSupplierController@index']);
Route::get('admin/bookSupplier/create/index', ['as'=>'admin.bookSupplier.create.index','uses'=>'Admin\BookSupplierController@create']);
Route::post('admin/bookSupplier/create/store', ['as'=>'admin.bookSupplier.store','uses'=>'Admin\BookSupplierController@store']);
Route::get('admin/bookSupplier/show/{id}', ['as'=>'admin.bookSupplier.show','uses'=>'Admin\BookSupplierController@show']);
Route::get('admin/bookSupplier/edit/index/{id}',['as'=>'admin.bookSupplier.edit.index','uses'=>'Admin\BookSupplierController@edit']);
Route::post('admin/bookSupplier/{id}', ['as'=>'admin.bookSupplier.update','uses'=>'Admin\BookSupplierController@update']);
Route::get('admin/bookSupplier/destroy/{id}', ['as'=>'admin.bookSupplier.destroy','uses'=>'Admin\BookSupplierController@destroy']);
//END BOOK_SUPPLIER

/*
//COSTUMERS_BOOK
Route::get('admin/costumer/list/index', ['as'=>'admin.costumer.list.index','uses'=>'Admin\CostumerController@index']);
Route::get('admin/costumer/create/index', ['as'=>'admin.costumer.create.index','uses'=>'Admin\CostumerController@create']);
Route::post('admin/costumer/create/store', ['as'=>'admin.costumer.store','uses'=>'Admin\CostumerController@store']);
Route::get('admin/costumer/show/{id}', ['as'=>'admin.costumer.show','uses'=>'Admin\CostumerController@show']);
Route::get('admin/costumer/create/edit/{id}', ['as'=>'admin.costumer.edit.index','uses'=>'Admin\CostumerController@edit']);
Route::post('admin/costumer/update/{id}', ['as'=>'admin.costumer.update','uses'=>'Admin\CostumerController@update']);
Route::get('admin/costumer/destroy/{id}', ['as'=>'admin.costumer.destroy','uses'=>'Admin\CostumerController@destroy']);
//END COSTUMER_BOOK
*/
});
