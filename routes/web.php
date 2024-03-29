<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('products', [ProductController::class,'index']);
Route::get('products/{product}', [ProductController::class,'show'])->name('products.show');
Route::post('add_to_cart', [ProductController::class,'add_to_cart'])->name('add_to_cart');
