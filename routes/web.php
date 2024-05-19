<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/company', function() {
    return view('site/company');
});

Route::any('/any', function() {
    return "Permite todo tipo de acesso http (GET, POST, PUT, DELETE)";
});

/**
 * [Pode ser utilizado para alguma forma de segurança ou forçar sua utilização de modo correto]
 */
Route::match(['put', 'delete'], '/match', function() {
    return "Permite apenas acessos definidos";
});

/**
 * [Inserindo os parametros eles são obrigados a serem declarados, uma forma de não deixar como obrigatorio é colocar um "?" e inserir um valor padrão para o mesmo]
 *
 * @param   [type]  $id        [$id description]
 * @param   [type]  $category  [$category description]
 *
 * @return  [type]             [return description]
 */
Route::get('/product/{id}/{category?}', function($id, $category = '') {
    return "O id do produto é:" . $id . "<br>" . " e a categoria é " . $category;
});

Route::get('/sobre', function() {
   return redirect('/company') ;
});

// metodo simplificado de fazer o redirect
Route::redirect('/contato', '/empresa');

// metodo simplificado de fazer rota da view
Route::view('/perfil', 'site/perfil');

Route::get('/news', function() {
    return view("news.news");
})->name("noticias");

/**
 * redirecionando para o name declarado na rota news
 * mesmo se alterar a rota o name sera usado como link
 * caso o name for mudado o redirect não vai funcionar
 */
Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

/**
 * Utilizando o metodo prefix ele esta inserindo nas rotas o "admin"
 * assim as rotas dentro do mesmo acaba recebendo o seu valor
 * exemplo: 'dashboard' é inserido na rota como 'admin/dashboard'
 */
Route::prefix("admin")->group(function(){
    Route::get('dashboard', function() {
        return "strador";
    });
    
    Route::get('user', function() {
        return "Usuários";
    });
    
    Route::get('client', function() {
        return "Clientes";
    });
});


// Primeiro modo de fazer o metodo name e prefix com o group
Route::name("category.")->prefix('category')->group(function(){

    Route::get('car', function() {
        return "Carros";
    })->name('car');
    
    Route::get('motorcycle', function() {
        return "Motos";
    })->name('motorcycle');
    
    Route::get('truck', function() {
        return "Caminhões";
    })->name('truck');

});

// Segundo modo de fazer o metodo name e prefix com o group
Route::group([
    'prefix'    => 'setor', // Declarar o prefixo
    'as'        => 'setor'  // Declara o name da rota
], function() {

    Route::get('car', function() {
        return "Carros";
    })->name('car');
    
    Route::get('motorcycle', function() {
        return "Motos";
    })->name('motorcycle');
    
    Route::get('truck', function() {
        return "Caminhões";
    })->name('truck');
    
});

// CONTROLLERS
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

Route::resource('products', ProductController::class);