<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RawCoconutController;
use App\Http\Controllers\CoconutShellController;
use App\Http\Controllers\CoconutMilkController;
use App\Http\Controllers\CoconutFiberController;
use App\Http\Controllers\CoconutSugarController;
use App\Http\Controllers\CoconutOilController;



Route::get('/welcome', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
     
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::get("/", function () {
    return view('dashboardltf');
});

Route::get("/marketing", function () {
    return view('marketing');
});
Route::get("/petani", function () {
    return view('petani');
});

Route::get("/requestmarketing", function () {
    return view('requestmarketing');
});
Route::get("/requestpetani", function () {
    return view('requestpetani');
});

Route::get('/products', [ProductsController::class, 'products']);
Route::get('/rawcoconut', [RawCoconutController::class, 'rawcoconut']);
Route::get('/coconutshell', [CoconutShellController::class, 'coconutshell']);
Route::get('/coconutmilk', [CoconutMilkController::class, 'coconutmilk']);
Route::get('/coconutfiber', [CoconutFiberController::class, 'coconutfiber']);
Route::get('/coconutsugar', [CoconutSugarController::class, 'coconutsugar']);
Route::get('/coconutoil', [CoconutOilController::class, 'coconutoil']);

Route::get("/list", function () {
    return view('list_product');
});

Route::get("/cart", function () {
    return view('cart');
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

Route::get('/tambah_produk', function () {
    return view('tambah_produk');
});
Route::get('/ubah-produk', function () {
    return view('ubah');
});
Route::get('/update-produk', function () {
    return view('update');
});
Route::get('/update-produk', function () {
    return view('update');
});