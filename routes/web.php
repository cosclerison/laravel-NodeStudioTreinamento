<?php

// use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

// CONTROLLERS
Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::resource('produtos', ProdutoController::class);

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'category'])->name('site.category');