<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\SupplierController;


Route::middleware('auth')->group(function () {

    Route::get('admin/home/index', ['as' => 'admin.home.index', 'uses' => 'Admin\HomeController@index']);


    //EMPLOYER
    Route::get('admin/employer/list/index', ['as' => 'admin.employer.list.index', 'uses' => 'Admin\EmployerController@index']);
    Route::get('admin/employer/create/index', ['as' => 'admin.employer.create.index', 'uses' => 'Admin\EmployerController@create']);
    Route::post('admin/employer/create/store', ['as' => 'admin.employer.create.store', 'uses' => 'Admin\EmployerController@store']);
    Route::get('admin/employer/show/{id}', ['as' => 'admin.employer.show', 'uses' => 'Admin\EmployerController@show']);
    Route::get('admin/employer/edit/{id}', ['as' => 'admin.employer.edit.index', 'uses' => 'Admin\EmployerController@edit']);
    Route::post('admin/employer/update/{id}', ['as' => 'admin.employer.update', 'uses' => 'Admin\EmployerController@update']);
    Route::get('admin/employer/destroy/{id}', ['as' => 'admin.employer.destroy', 'uses' => 'Admin\EmployerController@destroy']);
    //END EMPLOYER

    //BOOKS
    Route::get('admin/book/list/index', ['as' => 'admin.book.list.index', 'uses' => 'Admin\BookController@index']);
    Route::get('admin/book/create/index', ['as' => 'admin.book.create.index', 'uses' => 'Admin\BookController@create']);
    Route::post('admin/book/create/store', ['as' => 'admin.book.create.store', 'uses' => 'Admin\BookController@store']);
    Route::get('admin/book/show/{id}', ['as' => 'admin.book.show', 'uses' => 'Admin\BookController@show']);
    Route::get('admin/book/edit/{id}', ['as' => 'admin.book.edit.index', 'uses' => 'Admin\BookController@edit']);
    Route::post('admin/book/update/{id}', ['as' => 'admin.book.update', 'uses' => 'Admin\BookController@update']);
    Route::get('admin/book/destroy/{id}', ['as' => 'admin.book.destroy', 'uses' => 'Admin\BookController@destroy']);
    Route::get('admin/book/getBookById/{id}', ['as' => 'admin.book.getBookById', 'uses' => 'Admin\BookController@getBookById']);
    //END BOOK

    //SUPPLIER
    Route::get('admin/supplier/list/index', ['as' => 'admin.supplier.list.index', 'uses' => 'Admin\SupplierController@index']);
    Route::get('admin/supplier/create/index', ['as' => 'admin.supplier.create.index', 'uses' => 'Admin\SupplierController@create']);
    Route::post('admin/supplier/create/store', ['as' => 'admin.supplier.store', 'uses' => 'Admin\SupplierController@store']);
    Route::get('admin/supplier/show/{id}', ['as' => 'admin.supplier.show', 'uses' => 'Admin\SupplierController@show']);
    Route::get('admin/supplier/edit/{id}', ['as' => 'admin.supplier.edit', 'uses' => 'Admin\SupplierController@edit']);
    Route::post('admin/supplier/update/{id}', ['as' => 'admin.supplier.update', 'uses' => 'Admin\SupplierController@update']);
    Route::get('admin/supplier/destroy/{id}', ['as' => 'admin.supplier.destroy', 'uses' => 'Admin\SupplierController@destroy']);
    //END SUPPLIER

    //COSTUMER
    Route::get('admin/costumer/list/index', ['as' => 'admin.costumer.list.index', 'uses' => 'Admin\CostumerController@index']);
    Route::get('admin/costumer/create/index', ['as' => 'admin.costumer.create.index', 'uses' => 'Admin\CostumerController@create']);
    Route::post('admin/costumer/create/store', ['as' => 'admin.costumer.store', 'uses' => 'Admin\CostumerController@store']);
    Route::get('admin/costumer/show/{id}', ['as' => 'admin.costumer.show', 'uses' => 'Admin\CostumerController@show']);
    Route::get('admin/costumer/create/edit/{id}', ['as' => 'admin.costumer.edit.index', 'uses' => 'Admin\CostumerController@edit']);
    Route::post('admin/costumer/update/{id}', ['as' => 'admin.costumer.update', 'uses' => 'Admin\CostumerController@update']);
    Route::get('admin/costumer/destroy/{id}', ['as' => 'admin.costumer.destroy', 'uses' => 'Admin\CostumerController@destroy']);
    //END COSTUMER

    //User
    Route::get('admin/user/list/index', ['as' => 'admin.user.list.index', 'uses' => 'Admin\UserController@index']);
    Route::get('admin/user/create/index', ['as' => 'admin.user.create.index', 'uses' => 'Admin\UserController@create']);
    Route::post('admin/user/create/store', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store']);
    Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show']);
    Route::get('admin/user/create/edit/{id}', ['as' => 'admin.user.edit.index', 'uses' => 'Admin\UserController@edit']);
    Route::post('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update']);
    Route::get('admin/user/destroy/{id}', ['as' => 'admin.user.destroy', 'uses' => 'Admin\UserController@destroy']);
    //END User

    //TYPE_PAYMENT
    Route::get('admin/typePayment/list/index', ['as' => 'admin.typePayment.list.index', 'uses' => 'Admin\TypePaymentController@index']);
    Route::get('admin/typePayment/create/index', ['as' => 'admin.typePayment.create.index', 'uses' => 'Admin\TypePaymentController@create']);
    Route::post('admin/typePayment/create/store', ['as' => 'admin.typePayment.store', 'uses' => 'Admin\TypePaymentController@store']);
    Route::get('admin/typePayment/show/{id}', ['as' => 'admin.typePayment.show', 'uses' => 'Admin\TypePaymentController@show']);
    Route::get('admin/typePayment/create/edit/{id}', ['as' => 'admin.typePayment.edit.index', 'uses' => 'Admin\TypePaymentController@edit']);
    Route::post('admin/typePayment/update/{id}', ['as' => 'admin.typePayment.update', 'uses' => 'Admin\TypePaymentController@update']);
    Route::get('admin/typePayment/destroy/{id}', ['as' => 'admin.typePayment.destroy', 'uses' => 'Admin\TypePaymentController@destroy']);

    //END TYPE_PAYMENT

    //SALE
    Route::get('admin/sale/list/index', ['as' => 'admin.sale.list.index', 'uses' => 'Admin\SaleController@index']);
    Route::get('admin/sale/create/index', ['as' => 'admin.sale.create.index', 'uses' => 'Admin\SaleController@create']);
    Route::post('admin/sale/create/store', ['as' => 'admin.sale.store', 'uses' => 'Admin\SaleController@store']);
    Route::get('admin/sale/show/{id}', ['as' => 'admin.sale.show', 'uses' => 'Admin\SaleController@show']);
    Route::get('admin/sale/edit/{id}', ['as' => 'admin.sale.edit.index', 'uses' => 'Admin\SaleController@edit']);
    Route::post('admin/sale/update/{id}', ['as' => 'admin.sale.update', 'uses' => 'Admin\SaleController@update']);
    Route::post('admin/sale/destroy/{id}', ['as' => 'admin.sale.destroy', 'uses' => 'Admin\SaleController@destroy']);
    Route::get('admin/sale/viewPdf/{id}', ['as' => 'admin.sale.viewPdf', 'uses' => 'Admin\SaleController@viewPdf']);
    Route::get('admin/sale/exportPdf/{id}', ['as' => 'admin.sale.exportPdf', 'uses' => 'Admin\SaleController@exportPdf']);
    Route::post('admin/sale/search', ['as' => 'admin.sale.search', 'uses' => 'Admin\SaleController@search']);
    //END SALE


    //BOOK_SUPPLIER
    Route::get('admin/bookSupplier/list/index', ['as' => 'admin.bookSupplier.list.index', 'uses' => 'Admin\BookSupplierController@index']);
    Route::get('admin/bookSupplier/create/index', ['as' => 'admin.bookSupplier.create.index', 'uses' => 'Admin\BookSupplierController@create']);
    Route::post('admin/bookSupplier/create/store', ['as' => 'admin.bookSupplier.store', 'uses' => 'Admin\BookSupplierController@store']);
    Route::get('admin/bookSupplier/show/{id}', ['as' => 'admin.bookSupplier.show', 'uses' => 'Admin\BookSupplierController@show']);
    Route::get('admin/bookSupplier/edit/index/{id}', ['as' => 'admin.bookSupplier.edit.index', 'uses' => 'Admin\BookSupplierController@edit']);
    Route::post('admin/bookSupplier/update/{id}', ['as' => 'admin.bookSupplier.update', 'uses' => 'Admin\BookSupplierController@update']);
    Route::get('admin/bookSupplier/destroy/{id}', ['as' => 'admin.bookSupplier.destroy', 'uses' => 'Admin\BookSupplierController@destroy']);
    //END BOOK_SUPPLIER

});


// Route::middleware('operator')->group(function () {

//     Route::get('admin/home/index', ['as' => 'admin.home.index', 'uses' => 'Admin\HomeController@index']);

//     //SALE
//     Route::get('admin/sale/list/index', ['as' => 'admin.sale.list.index', 'uses' => 'Admin\SaleController@index']);
//     Route::get('admin/sale/create/index', ['as' => 'admin.sale.create.index', 'uses' => 'Admin\SaleController@create']);
//     Route::post('admin/sale/create/store', ['as' => 'admin.sale.store', 'uses' => 'Admin\SaleController@store']);
//     Route::get('admin/sale/show/{id}', ['as' => 'admin.sale.show', 'uses' => 'Admin\SaleController@show']);
//     Route::get('admin/sale/edit/{id}', ['as' => 'admin.sale.edit.index', 'uses' => 'Admin\SaleController@edit']);
//     Route::post('admin/sale/update/{id}', ['as' => 'admin.sale.update', 'uses' => 'Admin\SaleController@update']);
//     Route::post('admin/sale/destroy/{id}', ['as' => 'admin.sale.destroy', 'uses' => 'Admin\SaleController@destroy']);
//     Route::get('admin/sale/viewPdf/{id}', ['as' => 'admin.sale.viewPdf', 'uses' => 'Admin\SaleController@viewPdf']);
//     Route::get('admin/sale/exportPdf/{id}', ['as' => 'admin.sale.exportPdf', 'uses' => 'Admin\SaleController@exportPdf']);
//     Route::post('admin/sale/search', ['as' => 'admin.sale.search', 'uses' => 'Admin\SaleController@search']);
//     //END SALE

// });
