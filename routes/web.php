<?php

// use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProdutoController;

// CONTROLLERS
// Route::resource('produtos', ProdutoController::class);
// Route::resource('users', UserController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'category'])->name('site.category');

Route::get('/carrinho', [CartController::class, 'cartList'])->name('site.carrinho');
Route::post('/carrinho', [CartController::class, 'addCart'])->name('site.carrinho');
Route::post('/remover', [CartController::class, 'deleteCart'])->name('site.deletecarrinho');
Route::post('/atualizar', [CartController::class, 'updateCart'])->name('site.atualizacarrinho');
Route::get('/limpar', [CartController::class, 'clearCart'])->name('site.limpacarrinho');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/register',[LoginController::class, 'create'])->name('login.create');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'checkemail']);
Route::get('/admin/produtos', [ProdutoController::class, 'index'])->name('admin.products');
Route::delete('/admin/produto/delete/{id}', [ProdutoController::class, 'destroy'])->name('admin.product.delete');
Route::post('/admin/produto/store', [ProdutoController::class, 'store'])->name('admin.product.store');