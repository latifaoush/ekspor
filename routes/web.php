<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FarmerRequestController;
use App\Http\Controllers\MarketingRequestController;
use App\Http\Controllers\RawCoconutController;
use App\Http\Controllers\CoconutShellController;
use App\Http\Controllers\CoconutMilkController;
use App\Http\Controllers\CoconutFiberController;
use App\Http\Controllers\CoconutSugarController;
use App\Http\Controllers\CoconutOilController;
use App\Http\Controllers\OrderController;



Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::post('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard/pembeli', function () {
        return view('dashboardltf');
    })->name('dashboard.pembeli');

    Route::get('dashboard/marketing', [ProductController::class, 'index'])->name('dashboard.marketing');

    Route::get('dashboard/petani', function () {
        return view('petani');
    })->name('dashboard.petani');
});

Route::get('/', [AuthController::class, 'login']);


Route::get('/farmer/requests', [FarmerRequestController::class, 'index'])->name('farmer.requests');
Route::patch('/farmer/requests/{coconutRequest}', [FarmerRequestController::class, 'update'])->name('farmer.requests.update');

Route::get('/marketing/requests', [MarketingRequestController::class, 'index'])->name('marketing.requests');
Route::post('/marketing/requests', [MarketingRequestController::class, 'store'])->name('marketing.requests.store');
Route::delete('/marketing/requests/{coconutRequest}', [MarketingRequestController::class, 'destroy'])->name('marketing.requests.destroy');



Route::resource('products', ProductController::class);
Route::get('/product', [ProductsController::class, 'index']);




// Route::get('/detail-product', [ProductsController::class, 'view'])->name('detail_product');
Route::get('/detail-product/{id}', [ProductsController::class, 'show'])->name('detail_product');




Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/rawcoconut', [RawCoconutController::class, 'rawcoconut']);



Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::delete('/orders/{orderId}/items/{itemId}', [OrderController::class, 'destroy'])->name('orders.destroy');



Route::middleware(['auth'])->group(function () {
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
});



Route::middleware('auth')->group(function () {
    // Menampilkan halaman keranjang
    Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');

    // Menambahkan produk ke keranjang
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

    // Menghapus item dari keranjang
    Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // Mengupdate item di keranjang
    Route::post('/cart/{id}/update', [CartController::class, 'update'])->name('cart.update');

    // Menyelesaikan pesanan
    Route::post('/order/complete/{order}', [OrderController::class, 'complete'])->name('order.complete');

    // Menampilkan detail pesanan
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});




Route::get("/about", function () {
    return view('about');
});

Route::get("/contact", function () {
    return view('contact');
});

Route::get("/pesanan_rawcoc", function () {
    return view('pesanan_rawcoc');
});
Route::get("/pesanan_cocshell", function () {
    return view('pesanan_cocshell');
});
Route::get("/pesanan_cocoil", function () {
    return view('pesanan_cocoil');
});
Route::get("/pesanan_cocmilk", function () {
    return view('pesanan_cocmilk');
});
Route::get("/pesanan_cocfiber", function () {
    return view('pesanan_cocfiber');
});
Route::get("/pesanan_cocsugar", function () {
    return view('pesanan_cocsugar');
});
