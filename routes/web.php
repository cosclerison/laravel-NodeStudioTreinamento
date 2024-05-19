<?php

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
Route::get('/produto/{id}/{category?}', function($id, $category = '') {
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