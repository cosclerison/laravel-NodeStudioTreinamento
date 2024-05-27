<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Podemos utilizar o seu nome natural ou seja original ou utilizar um alias para modifica-lo
use \App\Models\Produto as Product;

class ProdutoController extends Controller
{
    public function index() {
        
        $produtos = Product::paginate(3);
        
        return view('admin.products', compact("produtos"));
        // return view('site.home', ["produtos" => $produtos]);
        // outro modo
        /**
         * [Abaixo dados de exercicios do curso antes da aula 42]
         */
        // return "<h1>Index</h1>";

        // $produtos = Product::all();
        // return $produtos;

        // $name = 'Clerison';
        // $age  = 40;
        // $html = "<h1> Olá somos a PumaSync </h1>";
        // $frutas = [
        //     'Maçã',
        //     'Laranja',
        //     'Uva',
        //     'Pera',
        //     'Abacaxi',
        //     'Cáqui',
        //     'Limão',
        // ];

        // Primeiro modo de declarar as variaveis
        // return view('news.news', 
        // [
        //     'name'  => $name,
        //     'idade' => $age,
        //     'html'  => $html,
        // ]);

        // Segundo modo de declarar as variaveis
        // return view('news.news', compact('name', 'age', 'html'));
        // return view('site.home', compact('name', 'age', 'html', 'frutas'));

    }

    public function show($id = 0) {
        return "Show: <strong>" .  $id . "</strong>";
    }
}
