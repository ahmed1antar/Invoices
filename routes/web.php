<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomersReportController;
use App\Http\Controllers\InvoiceArchiveController;
use App\Http\Controllers\InvoiceAttachmentsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicesDetailsController;
use App\Http\Controllers\InvoicesReportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('InvoiceAttachments',InvoiceAttachmentsController::class);
Route::resource('invoices',InvoiceController::class);
Route::get('InvoicesDetails/{id}',[InvoicesDetailsController::class,'edit']);

Route::get('download/{invoice_number}/{file_name}',[InvoicesDetailsController::class,'get_file']);
Route::get('View_file/{invoice_number}/{file_name}',[InvoicesDetailsController::class,'open_file']);

Route::post('delete_file', [InvoicesDetailsController::class,'destroy'])->name('delete_file');

Route::get('/edit_invoice/{id}',[InvoiceController::class,'edit']);

Route::resource('sections',SectionController::class);
Route::get('section/{id}',[InvoiceController::class,'getProducts']);
Route::get('/Status_show/{id}',[InvoiceController::class,'show'])->name('Status_show');

Route::resource('Archive',InvoiceArchiveController::class);

Route::get('Print_invoice/{id}',[InvoiceController::class,'Print_invoice']);
Route::get('Invoice_Paid',[InvoiceController::class,'Invoice_Paid']);

Route::get('Invoice_UnPaid',[InvoiceController::class,'Invoice_UnPaid']);

Route::get('Invoice_Partial',[InvoiceController::class,'Invoice_Partial']);

Route::post('/Status_Update/{id}', [InvoiceController::class,'Status_Update'])->name('Status_Update');

Route::get('invoices_report',[InvoicesReportController::class,'index']);

Route::post('Search_invoices',[InvoicesReportController::class,'Search_invoices']);

Route::get('customers_report',[CustomersReportController::class,'index'])->name("customers_report");

Route::post('Search_customers',[CustomersReportController::class,'Search_customers']);

Route::resource('products',ProductController::class);
Route::get('export_invoices',[InvoiceController::class,'export']);

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);


});


Route::get('/{page}',[AdminController::class,'index']);

