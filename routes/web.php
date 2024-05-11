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