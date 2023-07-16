<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['products' => Product::limit(9)->orderBy('id', 'desc')->get()]);
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/products', function () {
    return view('products', ['products' => Product::limit(9)->get()]);
})->name('products');

Route::get('/product/{id}', function (string $id) {
    return view('product_detail', ['products' => Product::where('id', '=', $id)->first()]);
})->name('product_detail');

Auth::routes();

Route::resource('/admin_product', ProductController::class);

Route::get('/home', function () {
    return redirect()->route('admin_product.index');
})->name('home');
