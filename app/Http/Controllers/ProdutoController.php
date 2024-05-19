<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Podemos utilizar o seu nome natural ou seja original ou utilizar um alias para modifica-lo
use \App\Models\Produto as Product;

class ProdutoController extends Controller
{
    public function index() {
        
        // return "<h1>Index</h1>";

        $produtos = Product::all();

        // dd($produtos);

        return $produtos;
    }

    public function show($id = 0) {
        return "Show: <strong>" .  $id . "</strong>";
    }
}
