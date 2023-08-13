<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PenjualanController;
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['middleware' => 'auth'])->group(function () {
    Route::get('/user/data', [UserController::class, 'index'])->name('user.data');
    Route::resource('/user', UserController::class);


});

/*produk*/

Route::get('/produk',[ProdukController::class, 'terserah'])->name('product.index');
Route::get('/produk/create',[ProdukController::class, 'create'])->name('product.create');
Route::post('/produk/store',[ProdukController::class, 'store'])->name('product.store');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('product.edit');
Route::patch('/produk/update/{produk}', [ProdukController::class, 'update'])
->name('product.update');

/*------------------------------------------------------------------------------------*/
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/supply-form', [SupplierController::class, 'create'])->name('supplier.suppadd');
Route::post('/supply-post', [SupplierController::class, 'store'])->name('tambahsupplier');

//transaksi pembelian
Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase.index');

Route::get('/purchase/detail/{index}', [PurchaseController::class, 'detail'])
    ->name('purchase.detail');

Route::get('purchase/create/{suppId}', [PurchaseController::class, 'create'])
->name('purchase.create');

 //orders
 Route::get('/orders', [OrderController::class, 'index'])->name('orders');
 Route::get('/load_data', [OrderController::class, 'load_data'])->name('load_data');
 Route::get('/load_data_product', [OrderController::class, 'load_data_product'])->name('load_data_product');
 Route::get('/add_orders', [OrderController::class, 'add_orders'])->name('add_orders');
 Route::get('/jumlah', [OrderController::class, 'add_jumlah'])->name('order.jumlah');
 Route::get('/changejumlah', [OrderController::class, 'changejumlah'])->name('order.change.jml');
 Route::get('/gettotal', [OrderController::class, 'gettotal'])->name('order.gettotal');
 Route::get('/add_orderdfix', [OrderController::class, 'add_orderdfix'])->name('order.add_orderdfix');
 Route::get('/orders/delete', [OrderController::class, 'delete'])->name('orders.delete');
 Route::get('/orders/batal', [OrderController::class, 'batal'])->name('orders.batal');


//laporan
Route::get('/struck', [ProductController::class, 'laporan_struck'])->name('struck');
