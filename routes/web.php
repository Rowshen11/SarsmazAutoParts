<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class,'show'])->name('products.show');
Route::get('/about', [ProductController::class,'about'])->name('pages.about');

