<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use \App\Models\Produto;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(3);

        // return view('site.home', ["produtos" => $produtos]);
        // outro modo
        return view('site.home', compact("produtos"));
    }

    public function details($slug)
    {
        $produto = Produto::where('slug', $slug)->first();

        // Modo 01 com Providers usando GATE
        // Gate::authorize('ver-produto', $produto);

        // Modo 02 com Providers usando POLICY
        // $this->authorize('verProduto', $produto);

        // Modo 03 RESTRIÇÂO usando CAN dando permissão
        if (auth()->user()->can('verProduto', $produto)) {
            return view('site.details', compact('produto'));
        } else {
            return redirect()->route('site.index'); // Ou outra lógica de redirecionamento
        }

        // Modo 04 RESTRIÇÂO usando CANNOT dando permissão
        // if (auth()->user()->cannot('verProduto', $produto)) {
        //     return view('site.detail', compact('produto'));
        // } else {
        //     return redirect()->route('login'); // Ou outra lógica de redirecionamento
        // }
        
        // Modo 05 RESTRIÇÂO usando Gate dando permissão com ALLOWS
        // if(Gate::allows('ver-produto', $produto)) {
        //     return view('site.details', compact('produto'));
        // }

        // Modo 06 RESTRIÇÂO usando Gate negando permissão com DENIES e redirecionando rota
        // if(Gate::denies('ver-produto', $produto)) {
        //     return redirect()->route('site.index');
        // }


        // return view('site.details', compact('produto'));
    }   
    
    public function category($id)
    {   
        $category = Category::find($id);
        $produtos = Produto::where('id_category', $id)->paginate(3);

        return view('site.category', compact('produtos', 'category'));
    }
}
