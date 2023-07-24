<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
    return view('index');
});
// Route::get('/index', function () {
//     return view('customer.add');
// });
Route::get('/list', [CustomerController::class, 'listCustomer'])->name('list');

Route::get('/add', [CustomerController::class, 'addCustomer'])->name('add');

Route::post('/customers', [CustomerController::class, 'listCustomer'])->name('search_customer');

Route::match(['get', 'post'], '/customers/add', [CustomerController::class, 'addCustomer'])->name('addCustomer');
// Route::post('/customers/add', [CustomerController::class, 'addCustomer'])->name('addCustomer');

Route::match(['get', 'post'], '/customers/edit/{id}', [CustomerController::class, 'editCustomer'])->name('editCustomer');

Route::get('/customers/delete/{id}', [CustomerController::class, 'deleteCustomer'])->name('deleteCustomer');


Route::get('/listProduct', [ProductController::class, 'listProduct'])->name('listProduct');

Route::get('/addProducts', [ProductController::class, 'addProduct'])->name('addProducts');

Route::match(['get', 'post'], '/product/add', [ProductController::class, 'addProduct'])->name('addProduct');

Route::match(['get', 'post'], '/product/edit/{id}', [ProductController::class, 'editProduct'])->name('editProduct');

Route::get('/product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
