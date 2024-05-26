<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
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

        return view('site.details', compact('produto'));
    }   
    
    public function category($id)
    {   
        $category = Category::find($id);
        $produtos = Produto::where('id_category', $id)->paginate(3);

        return view('site.category', compact('produtos', 'category'));
    }
}
