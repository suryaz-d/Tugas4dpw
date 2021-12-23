<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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


Route::get('beranda', [AdminController::class, 'showBeranda']);
Route::get('kategori', [AdminController::class, 'showKategori']);
Route::get('promo', [AdminController::class, 'showPromo']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);


Route::get('adminlogin', [AuthController::class, 'showAdminlogin']);




Route::get('about', [HomeController::class, 'showAbout']);
Route::get('whyus', [HomeController::class, 'showWhyus']);
Route::get('testimonial', [HomeController::class, 'showTestimonial']);
Route::get('login', [HomeController::class, 'showLogin']);

Route::get('/', [CLientProdukController::class, 'index']);
Route::get('detail/{produk}', [ClientProdukController::class, 'show']);

Route::get('product', [CLientProdukController::class, 'prod']);

