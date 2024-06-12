<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');


//product route
Route::get('/product/index', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/view', [App\Http\Controllers\ProductController::class, 'productView'])->name('product.view');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'productEdit'])->name('product.edit');
Route::get('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'productDelete'])->name('product.delete');
Route::post('/product/post', [App\Http\Controllers\ProductController::class, 'productPost'])->name('product.post');
Route::post('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'productUpdate'])->name('product.update');
