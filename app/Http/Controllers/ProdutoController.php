<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Podemos utilizar o seu nome natural ou seja original ou utilizar um alias para modifica-lo
use \App\Models\Produto as Product;

class ProdutoController extends Controller
{
    public function index() {
        
        // return "<h1>Index</h1>";

        // $produtos = Product::all();
        // return $produtos;

        $name = 'Clerison';
        $age  = 40;
        $html = "<h1> Olá somos a PumaSync </h1>";

        // Primeiro modo de declarar as variaveis
        // return view('news.news', 
        // [
        //     'name'  => $name,
        //     'idade' => $age,
        //     'html'  => $html,
        // ]);

        // Segundo modo de declarar as variaveis
        // return view('news.news', compact('name', 'age', 'html'));
        return view('site.home', compact('name', 'age', 'html'));

    }

    public function show($id = 0) {
        return "Show: <strong>" .  $id . "</strong>";
    }
}
