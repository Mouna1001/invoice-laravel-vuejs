<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
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

Route::get('invoice',[InvoiceController::class,'index']);

Route::get('invoice/create',[InvoiceController::class,'create']);

Route::get('invoice/invoiceitemproducts/get',[InvoiceController::class,'getAllInvoiceItemProducts']);

Route::post('invoice/store', [InvoiceController::class,'store']);


