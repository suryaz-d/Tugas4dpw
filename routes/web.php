<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
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

Route::get('/index', [TokoController::class, 'showIndex']);
Route::get('/about', [TokoController::class, 'showAbout']);
Route::get('/product', [TokoController::class, 'showProduct']);
Route::get('/testimonial', [TokoController::class, 'showTestimonial']);
Route::get('/why', [TokoController::class, 'showWhy']);

Route::get('/admin', [AdminController::class, 'showAdmin']);
Route::get('/beranda', [AdminController::class, 'showBeranda']);
Route::get('/kategori', [AdminController::class, 'showKategori']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{produk}', [ProdukController::class, 'show']);
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy']);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
