<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

// Podemos utilizar o seu nome natural ou seja original ou utilizar um alias para modifica-lo
use \App\Models\Produto as Product;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $produtos = Product::paginate(4);
        $categoryes = Category::all();
        
        return view('admin.products', compact("produtos", "categoryes"));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 0) {
        return "Show: <strong>" .  $id . "</strong>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Product::find($id);
        $produto->delete();

        return redirect()->route('admin.products')->with('sucesso', 'Produto removido com sucesso!');
    }

}
